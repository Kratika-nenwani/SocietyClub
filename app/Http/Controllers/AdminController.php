<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PropertyUnapproved;
use App\Models\User;
use Illuminate\Http\Response;
use App\Models\FacilityPartner;
use App\Models\BusinessPartner;
use App\Models\SocietyMember;
use App\Models\UserProfile;
use App\Models\Notice;
use App\Models\Property;
use App\Models\Gallery;
use App\Models\Issue;
use App\Models\Request as ModelsRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        return view('home');
    }

    public function dashboard()
   {
    return view('admin.dashboard');
}

public function createlisting()
{
    return view('admin.create-listing');

}

public function showPropertyList()
{
    $properties = PropertyUnapproved::all();
    return view('admin.property-list', ['properties' => $properties]);
}

public function index_main()
{
    return view('admin.index-main');

}

public function registered_users()
{
    $users = User::all(); // Retrieve all users from the database
    return view('admin.registered-users', compact('users')); // Pass the users to the view
}

public function addsocietyname(Request $request)
{
    $request->validate([
        'user_id' => 'required|integer|exists:users,id',
        'society_name' => 'required|string'
    ]);

    $user = User::find($request->input('user_id'));
    $user->society_name = $request->input('society_name');
    $user->save();

    return response()->json(['success' => 'Society name saved successfully.']);
}

public function save_property(Request $request)
{
    // Validate the request
    $request->validate([
        'title' => 'required|string|max:255',
        'description' => 'required|string',
        'city' => 'required|string|max:255',
        'address' => 'required|string|max:255',
        'zip' => 'required|string|max:10',
        'country' => 'required|string|max:255',
        'map_link' => 'nullable|url',
        
        'property_details' => 'required|array',
        'property_details.type.*' => 'required|string',  // Validate type array
        'property_details.count.*' => 'required|integer|min:1',  // Validate count array
        
        'amenities' => 'required|array',
        'amenities.*' => 'required|string',  // Validate amenities array
        
        'images' => 'required|array',
        
    ]);

    
    // Store uploaded images
    $imagePaths = [];

    if ($request->hasFile('images')) {
        foreach ($request->file('images') as $file) {
            $ext = $file->getClientOriginalExtension();
            $filename = time() . '.' . $ext;
            $file->move('PropertyImages/' . $request->name, $filename);
            $imagePaths[] = $filename;
        }
    }
    

    // Create a new Property record (assuming PropertyUnapproved model)
    $property = new PropertyUnapproved();  // Assuming this is your model for unapproved properties
    

    $property->user_id = auth()->id();  // Assign logged-in user ID
    $property->title = $request->title;
    $property->description = $request->description;
    $property->city = $request->city;
    $property->address = $request->address;
    $property->zip = $request->zip;
    $property->country = $request->country;
    $property->map_link = $request->map_link;

    // Process property details to store them in "1bhk:2" format
    $propertyDetails = [];
    if ($request->has('property_details')) {
        foreach ($request->property_details['type'] as $index => $type) {
            $count = $request->property_details['count'][$index];
            $propertyDetails[] = $type . ':' . $count;  // Concatenate type and count
        }
    }
    $property->property_details = json_encode($propertyDetails);  // Convert array to JSON (like ["1bhk:2", "3bhk:5"])

    // Process amenities and images
    $property->amenities = json_encode($request->amenities);  // Convert amenities to JSON
    $property->images = json_encode($imagePaths);  // Convert image paths to JSON
    $property->save();
    // Save the property data
    $user = User::where('id', auth()->id())->first();

// Retrieve the society_name as an array (if null, use an empty array)
    $societyNames = $user->society_name ? json_decode($user->society_name, true) : [];

    // Check if the property ID is already in the array
    if (!in_array($property->id, $societyNames)) {
        // Add the new property ID to the array
        $societyNames[] = $property->id;
    }

    // Update the society_name field with the modified array
    $user->society_name = json_encode($societyNames);
    $user->save();
    // Redirect back with success message
    return redirect()->back()->with('success', 'Property Submitted Successfully!!');
}



public function update_role(Request $request)
{
    // Validate the request input
    $request->validate([
        'role' => 'required|in:super-admin,society-admin,business-partner,facility-partner,user,society-member',
        'user_id' => 'required|exists:users,id',
    ]);

    $user = User::find($request->input('user_id'));

    if ($user) {
        $user->role = $request->input('role');
        $user->save();
        if ($user->role == 'society-member') {
            $societyMember = SocietyMember::where('user_id', $user->id)->first();

            if (!$societyMember) {
                SocietyMember::create([
                    'user_id' => $user->id,
                    'name' => $user->name,             
                    'email' => $user->email,       
                    'phone_number' => $user->phone_number, 
                    'flat' => null,              
                    'file' => null,    
                ]);
            }

            if ($validatedData['role'] === 'facility-partner') {
                $facilityPartner = FacilityPartner::firstOrNew(['user_id' => $user->id]);
        
                $facilityPartner->name = $user->name;
                $facilityPartner->email = $user->email;
                $facilityPartner->phone_number = $user->phone_number;
                $facilityPartner->facility = $user->facility; 
                $facilityPartner->description = $user->description; 
        
                $facilityPartner->save();
            }    
        }

        return response()->json(['success' => true]);
    }

    // If user is not found, return a 404 response
    return response()->json(['error' => 'User not found'], 404);
}

public function showFacilityPartners()
{
    // $userFacilityPartners = FacilityPartner::where('user_id', auth()->id())->get();
    // $roleFacilityPartners = User::where('role', 'facility-partner')->get();
    $facilityPartners = User::where('role', 'facility-partner')->get();
    return view('admin.facility-partner', compact('facilityPartners'));
}

public function saveFacilityPartner(Request $request) 
{ 
    
    // Validate the incoming request data
    $validatedData = $request->validate([ 
        'name' => 'required|string|max:255', 
        'email' => 'required|email|unique:users,email',
        'phone' => 'required|string|max:15', 
        'service' => 'required|string|max:255', 
        'description' => 'required|string', 
    ]); 
 
    // Save the new facility partner's information
    $user = new User();
    $user->name = $validatedData['name']; 
    $user->email = $validatedData['email']; 
    $user->phone = $validatedData['phone']; 
    $user->service = $validatedData['service']; 
    $user->description = $validatedData['description']; 
    $user->role = 'facility-partner';


    // Save the new user
    $user->save();

    Log::info('Facility partner added successfully.', ['userId' => $user->id]);
    
    // Return a success response
    return response()->json(['success' => 'Facility partner added successfully!']);
}

public function edit($id) {

    $partner = User::find($id);
    return response()->json($partner);
}

public function updates(Request $request, $id) {
    Log::info($request->all());
    Log::info($id);
    
    // Find the partner in the User table
    $partner = User::find($id);
    
    // Update the User details
    $partner->name = $request->input('name');
    $partner->email = $request->input('email');
    $partner->phone = $request->input('phone');
    // $partner->flat = $request->input('flat');
    
    // Save the User model
    $partner->save();
    
    // Update the flat in the SocietyMember table
    SocietyMember::where('user_id', $id)->update([
        'flat' => $request->input('flat')
    ]);

    return response()->json(['success' => 'Details Updated Successfully!']);
}


public function editFacilityPartner($id)
{
    $partner = User::findOrFail($id);
    return response()->json($partner);
}

public function updateFacilityPartner(Request $request, $id)
{
    $validated = $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email|max:255',
        'phone' => 'required|string|max:20',
        'service' => 'required|string|max:255',
        'description' => 'required|string|max:500',
    ]);

    $partner = User::findOrFail($id);
    $partner->update($validated);

    return response()->json(['success' => 'Facility partner updated successfully!']);
}

public function destroyFacilityPartner($id)
{

    $user = User::find($id);

    if ($user) {

        $societyMember = SocietyMember::where('user_id', $id)->first();

        if ($societyMember) {
            $societyMember->delete();
        }

        $user->role = "user";
        $user->service = null;
        $user->description = null;

        $user->save();

        return response()->json(['success' => 'Partner deleted and role reverted.']);
    }

    return response()->json(['error' => 'User not found!'], 404);
}

public function deleteProperty($id)
{
    $property = PropertyUnapproved::findOrFail($id); // Ensure you retrieve the property or fail if not found
    $property->delete(); // Delete the property

    // Redirect back to the previous page with a success message
    return redirect()->back() // Replace with the desired route
                     ->with('success', 'Property deleted successfully.');
}

public function business_partner()
{
    return view('admin.business-partner');
}


public function showSocietyMembers()
{
    // Fetch users with role 'society-member'
    $noticessw = auth()->user()->society_name; 
     
    // Decode the string to get the actual array of society IDs 
    $societyIds = json_decode($noticessw, true); // Converts string to array
    
    // Get notices for the authenticated user where any society_id matches the user's society_name IDs
    $facilityPartners = User::where(function ($query) use ($societyIds) {
        foreach ($societyIds as $societyId) {
            $query->orWhereJsonContains('society_name', $societyId);
        }
    })->where('role','society-member')->get();

    return view('admin.society-members', compact('facilityPartners'));
}

public function my_properties()
{
    $userId = Auth::id();

    $properties = PropertyUnapproved::where('user_id', $userId)->get();

    return view('admin.my-properties', ['properties' => $properties]);

}

public function show($id)
    {
        // Fetch the facility partner details using the ID
        // dd($id);
        $user = FacilityPartner::where('user_id',$id)->first();
        // dd($user);
        // Pass the details to the view
        return view('admin.facility-partner-details', compact('user'));
    }
    
    public function showBusinessPartners()
    {
        // Get only users with the role of 'facility-partner'
        $facilityPartners = User::where('role', 'business-partner')->get();
    
        // Pass the filtered users to the view
        return view('admin.business-partner', compact('facilityPartners'));
    }

public function editBusinessPartner($id)
{
    $partner = BusinessPartner::findOrFail($id);
    return response()->json($partner);
}

public function manageImages($id)
{
    $gallery = Gallery::findOrFail($id);
    $images = json_decode($gallery->image); // Decode JSON array
    return view('admin.manage-image', compact('gallery', 'images'));
}
public function deleteImage(Request $request, $id)
{
    $gallery = Gallery::findOrFail($id);
    $images = json_decode($gallery->image, true); // Get images array

    // Remove the image from array
    if(($key = array_search($request->image, $images)) !== false) {
        unset($images[$key]);
    }

    // Update JSON in the database
    $gallery->image = json_encode(array_values($images));
    $gallery->save();

    // Delete file from public/uploads
    $imagePath = public_path('uploads/' . $request->image);
    if (file_exists($imagePath)) {
        unlink($imagePath);
    }

    return redirect()->back()->with('success', 'Image deleted successfully.');
}

public function addImage(Request $request, $id)
{
    $gallery = Gallery::findOrFail($id);
    $images = json_decode($gallery->image, true); // Get existing images

    // Handle file upload
    if ($request->hasFile('new_images')) {
        foreach ($request->file('new_images') as $file) {
            $fileName = time() . '-' . $file->getClientOriginalName();
            $file->move(public_path('uploads'), $fileName);
            $images[] = $fileName; // Add new image to array
        }

        // Update JSON in the database
        $gallery->image = json_encode($images);
        $gallery->save();
    }

    return redirect()->back()->with('success', 'Images added successfully.');
}


public function saveBusinessPartner(Request $request) 
{ 
    
    // Validate the incoming request data
    $validatedData = $request->validate([ 
        'name' => 'required|string|max:255', 
        'email' => 'required|email|unique:users,email',
        'phone' => 'required|string|max:15', 
        'service' => 'required|string|max:255', 
        'description' => 'required|string', 
    ]); 
 
    // Save the new facility partner's information
    $user = new User();
    $user->name = $validatedData['name']; 
    $user->email = $validatedData['email']; 
    $user->phone = $validatedData['phone']; 
    $user->service = $validatedData['service']; 
    $user->description = $validatedData['description']; 
    $user->role = 'business-partner';


    // Save the new user
    $user->save();

    Log::info('Facility partner added successfully.', ['userId' => $user->id]);
    
    // Return a success response
    return response()->json(['success' => 'Business partner added successfully!']);
}

public function updateBusinessPartner(Request $request, $id)
{
    $validated = $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email|max:255',
        'phone_number' => 'required|string|max:20',
        'business' => 'required|string|max:255',
        'description' => 'required|string|max:500',
    ]);

    $partner = BusinessPartner::findOrFail($id);
    $partner->update($validated);

    return response()->json(['success' => 'Business partner updated successfully!']);
}

public function destroyBusinessPartner($id)
{
    $partner = BusinessPartner::findOrFail($id);
    $partner->delete();

    // Optionally, update the role back to user
    $user = User::findOrFail($partner->user_id);
    $user->update(['role' => 'user']);

    return response()->json(['success' => 'Business partner deleted and role reverted.']);
}

public function BusinessPartnerDetails($id)
{
        // Fetch the facility partner details using the ID
        $user = BusinessPartner::where('user_id',$id)->first();
        // dd($user);
        // Pass the details to the view
        return view('admin.business-partner-details', compact('user'));
}

    public function save(Request $request)
{

    $validated = $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email|max:255',
        'phone_number' => 'required|string|max:20',
        'business' => 'required|string|max:255',
        'description' => 'required|string|max:500',
    ]);
// log::info($request->all());

    BusinessPartner::create([
        'name' => $validated['name'],
        'email' => $validated['email'],
        'phone_number' => $validated['phone_number'],
        'business' => $validated['business'],
        'description' => $validated['description'],
        'user_id' => auth()->user()->id,
    ]);


    return redirect()->route('business-partner')->with('success', 'Business partner added successfully!');
}

public function get($id)
{
    // Fetch the member details by user_id
    $member = SocietyMember::where('user_id', $id)->first();
    if (!$member) {
      
    return redirect()->back()->with('success', 'No member details found!');
    }
    return view('admin.society-members-details', compact('member'));
}

public function saveSocietyMember(Request $request)
{
    // Validate the request
    $validated = $request->validate([
        
        'society_id' => 'required',
        'name' => 'required|string|max:255',
        'email' => 'required|email|unique:users,email',
        'phone' => 'required|digits:10',
        'flat' => 'required|string|max:10',
    ], [
        'name.required' => 'Name is required.',
        'email.required' => 'Email is required.',
        'email.email' => 'The email address must be a valid email address.',
        'email.unique' => 'The email address has already been taken.',
        'phone.required' => 'Phone number is required.',
        'phone.digits' => 'The phone number must be exactly 10 digits.',
        'flat.required' => 'Flat information is required.',
        // 'file.required' => 'A file is required.',
        // 'file.mimes' => 'The file must be a document or image.',
        // 'file.max' => 'The file size must not exceed 2MB.',
    ]);

    Log::info($request->all());
    $user = new User();
    $user->name = $validated['name'];
    $user->email = $validated['email'];
    $user->phone = $validated['phone'];
    $user->role = 'society-member'; 
    $user->password = Hash::make('12345678');
    $x=[];
    array_push($x, (int)$validated['society_id']);
    Log::info('hi');
    $user->society_name=json_encode($x);
    $user->save();
    
    Log::info($user->all());
    $member = new SocietyMember();
    // $member->name = $validated['name'];
    // $member->email = $validated['email'];
    $member->user_id = $user->id;
    // $member->phone_number = $validated['phone_number'];
    $member->flat = $validated['flat'];

    // if ($request->hasFile('file')) {
    //     $file = $request->file('file');
    //     $filename = time() . '.' . $file->getClientOriginalExtension();
    //     $path = public_path('documents');
    //     if (!file_exists($path)) {
    //         mkdir($path, 0777, true);
    //     }
    //     $file->move($path, $filename);
    //     $member->document = $filename;
    // }
    $member->save();

    // Redirect back to the list of society members
    return redirect()->route('society-members')->with('success', 'Society member saved successfully.');
}

public function destroySocietyMember($id)
{
    try {
        // Attempt to find the society member record
        $member = SocietyMember::where('user_id', $id)->first();

        // Check if the society member record exists
        if ($member) {
            // Delete the society member record
            $member->delete();
        }

        // Find the associated user
        $user = User::findOrFail($id);

        // Delete the user record
        $user->delete();

        return response()->json(['success' => 'Member and associated user deleted successfully.']);
    } catch (\Exception $e) {
        // Log the exception for debugging
        \Log::error('Error deleting member and user: ' . $e->getMessage());

        return response()->json(['error' => 'Failed to delete member and user.'], 500);
    }
}

public function update(Request $request, $id) {
    Log::info($request->all());
    Log::info($id);
    $partner = User::find($id);

    $partner->name = $request->input('name');
    $partner->email = $request->input('email');
    $partner->phone = $request->input('phone');
    $partner->service = $request->input('service');
    $partner->description = $request->input('description');

    $partner->save();

    return response()->json(['success' => 'Details Updated Successfully!']);
}

public function updateProfile(Request $request)
{
    // Validate incoming data
    $request->validate([
        'bio' => 'nullable|string|max:255',
        'website' => 'nullable|url',
        'first_name' => 'nullable|string|max:255',
        'last_name' => 'nullable|string|max:255',
        'contact' => 'nullable|string|max:255',
        'about_me' => 'nullable|string',
        'language' => 'nullable|string|max:255',
        'country' => 'nullable|string|max:255',
        'profile_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|',
    ]);

    // Get current logged-in user
    $user = Auth::user();

    // Handle profile photo upload
    if ($request->hasFile('profile_image')) {
        $file = $request->file('profile_image');
        $fileName = time() . '_' . $file->getClientOriginalName();
        $filePath = $file->storeAs('uploads/profile_images', $fileName, 'public');

        // Update the user's profile_image in the database
        $user->profile_image = $filePath;
        $user->save();
        return response()->json(['image_url' => asset('storage/' . $filePath)]);
    }
    return response()->json(['error' => 'Image upload failed'], 500);
}


public function accountsettings()
{
    return view('admin.account-settings');
}

public function profile()
{
    
    // $user = Auth::user(); 
    $user = User::where('id',auth()->user()->id)->first();

    // Pass the user data to the view
    return view('admin.profile', compact('user'));
}

public function viewNoticeBoard()
{
    // Assuming $noticessw contains the string array of society IDs
    $noticessw = auth()->user()->society_name;
    
    // Decode the string to get the actual array of society IDs
    $societyIds = json_decode($noticessw, true); // Converts string to array
    
    // Get notices for the authenticated user matching these society IDs
    $notices = Notice::whereIn('society_id', $societyIds)->get();

    // Return view with the notices
    return view('admin.notice-board', compact('notices'));
}

public function saveNotice(Request $request)
{
    // Validate the input
    $request->validate([
        'society_id' => 'required',
        'title' => 'required|string|max:255',
        'description' => 'required',
        'date' => 'required',
    ]);

    // Save the notice
    $notice = new Notice();
    $notice->society_id = $request->input('society_id'); // Ensure only the current user sees their own notices
    $notice->title = $request->input('title');
    $notice->description = $request->input('description');
    $notice->date = $request->input('date');
    $notice->save();

    return redirect()->route('notice-board')->with('success', 'Notice added successfully.');
}

public function showGallery()
{

    $noticessw = auth()->user()->society_name;
    
    // Decode the string to get the actual array of society IDs
    $societyIds = json_decode($noticessw, true); // Converts string to array
    
    

    // Fetch the gallery pictures where society_id matches
    $pictures = Gallery::whereIn('society_id', $societyIds)->get();

    // Pass the pictures to the view
    return view('admin.gallery', compact('pictures'));
}

public function deleteGallery($id)
{
    $picture = Gallery::find($id); // Replace with your model
   if($picture){
        $picture->delete();

        return response()->json(['success' => true]);
    } else {
        return response()->json(['success' => false], 404);
    }
}


public function viewRequests()
{
    $req=ModelsRequest::all();
    foreach($req as $r)
    {
        
    $user=User::where('id',$r->user_id)->first();
    $r->name=$user->name;
    $r->phone=$user->phone;
    
    $r->email=$user->email;
    }
    return view('admin.requests',compact('req'));
}

public function saveGallery(Request $request)
{
    // Validate the request
    $request->validate([
        'ename' => 'required|string',
        'society_id' => 'required', 
        'picture.*' => 'required|image',
        'date' => 'required|date',
    ]);

    Log::info($request);
    // Handle file uploads
    $imagePaths = [];

    if ($request->hasFile('picture')) {
        foreach ($request->file('picture') as $file) {
            $ext = $file->getClientOriginalExtension();
            $filename = time() . '.' . $ext;
            $file->move('uploads/' . $request->name, $filename);
            $imagePaths[] = $filename;
        }
    }
    // Save gallery details to the database
    $gallery = new Gallery();
    $gallery->event_name = $request->ename;
    $gallery->society_id = $request->society_id;
    // $gallery->image = json_encode($images); // Store the image file names as JSON
    $gallery->date = $request->date;
    $gallery->image = json_encode($imagePaths);
    $gallery->save();

    // Redirect back with success message
    return redirect()->back()->with('success', 'Gallery saved successfully.');
}

public function viewissue(){

    $userId = auth()->user()->society_name;

    // Get the society id linked to the admin
    $societyIds = $societyIds = json_decode($userId, true);

    // Fetch the issues for this society
    $issues = Issue::whereIn('society_id', $societyIds)->get();

    return view('admin.issue', compact('issues'));
}

public function resolveIssue($id)
{
    // Find the issue by its ID
    $issue = Issue::find($id);

    // Ensure the issue exists
    if (!$issue) {
        return redirect()->back()->with('error', 'Issue not found');
    }

    // Update the issue status to resolved
    $issue->status = 'resolved';

    // Store the default admin message in the message_by_admin column
    $issue->message_by_admin = 'Your issue has been resolved';

    // Save the changes to the issue
    $issue->save();

    // Redirect back with a success message
    return redirect()->back()->with('success', 'Issue marked as resolved and message sent to the user.');
}

public function sendMessage(Request $request, $id)
{
    // Validate the request
    $request->validate([
        'message' => 'required|string|',
    ]);

    // Find the issue by its ID
    $issue = Issue::find($id);

    // Ensure the issue exists
    if (!$issue) {
        return redirect()->back()->with('error', 'Issue not found');
    }

    // Update the message_by_admin column with the custom message
    $issue->message_by_admin = $request->message;

    // Save the changes to the issue
    $issue->save();

    // Flash a success message
    return redirect()->back()->with('success', 'Message sent to the user.');
}

public function updateStatus(Request $request) {
    $request->validate([
        'id' => 'required|integer|exists:requests,id',
        'status' => 'required|string|in:approved,rejected',
    ]);

    $requestToUpdate = ModelsRequest::find($request->id); // Use your actual model
    $requestToUpdate->status = $request->status;
    if($request->status=="approved")
    {
        $user=User::find($requestToUpdate->user_id);
        $user->role="society-admin";
        $user->save();
    }
    else
    {
        $user=User::find($requestToUpdate->user_id);
        $user->role="user";
        $user->save();
    }
    $requestToUpdate->save();

    return response()->json(['success' => true]);
}

}