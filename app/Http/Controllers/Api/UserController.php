<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Gallery;
use App\Models\Issue;
use App\Models\Notice;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function viewNoticeBoard()
    {
        $noticessw = auth()->user()->society_name;
        
        $societyIds = json_decode($noticessw, true); 
        
        $notices = Notice::whereIn('society_id', $societyIds)->get();
        $response = [
            'success' => true,
            'data' => $notices,
            'message' => 'Notices fetched successfully'
        ];
        
        return response()->json($response,200);
        
    }
    public function showGallery()
    {
    $noticessw = auth()->user()->society_name;

    $societyIds = json_decode($noticessw, true); // Converts string to array

    $pictures = Gallery::whereIn('society_id', $societyIds)->get();
    $response = [
        'success' => true,
        'data' => $pictures,
        'message' => 'Gallery fetched successfully'
    ];
    
    return response()->json($response,200);
    }
    
    public function add_issue(Request $request)
    {
        $validatedData = $request->validate([
            'society_id' => 'required|exists:societies,id',
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'status' => 'required|in:pending,resolved',
        ]);
     
        // Create a new issue
        $issue=new Issue();
        
            $issue->society_id = $validatedData['society_id'];
            $issue->user_id= Auth::id();
            $issue->title = $validatedData['title'];
            $issue->description= $validatedData['description'];
            $issue->status="pending";
        
        return response()->json([
            'message' => 'Issue created successfully',
            'issue' => $validatedData
        ], 201);
        // Return success response
        
    }
    public function get_facility_partners()
    {
    
    $pictures = User::where('role', "faiclity-partner")->get();
    $response = [
        'success' => true,
        'data' => $pictures,
        'message' => 'Facility Partner fetched successfully'
    ];
    
    return response()->json($response,200);
    }
    public function get_business_partners()
    {
    
    $pictures = User::where('role', "business-partner")->get();
    $response = [
        'success' => true,
        'data' => $pictures,
        'message' => 'Business Partner fetched successfully'
    ];
    
    return response()->json($response,200);
    }
    
}
