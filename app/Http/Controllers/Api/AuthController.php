<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use Validator;
use Exception;
use Auth;
use App\Models\User;
use App\Models\PropertyUnapproved;

class AuthController extends Controller
{
    //
    public function register(Request $request){
        //validation
        $validator= Validator::make($request->all(),[
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
            'c_password' => 'required|same:password',
        ]);

        if($validator->fails()){
            $response =[
                'success' => false,
                'message' => $validator->errors()
            ];
            return response()->json($response, 400);
        }

        $input= $request->all();
        $input['password'] =bcrypt($input['password']);
        $user= User::create($input);

        $success['token'] = $user->createToken('MyApp')->plainTextToken;
        $success['name'] = $user->name;

        $response = [
            'success' => true,
            'data' => $success,
            'message' => 'User registered successfully'
        ];
        
        return response()->json($response,200);
    }

    public function login(Request $request){
        if(Auth::attempt(['email'=>$request->email,'password'=>$request->password])){
            $user = Auth::user();
            $success['token'] = $user->createToken('MyApp')->plainTextToken;
            $success['name'] = $user->name;
            
            $response = [
                'success' => true,
                'data' =>$success,
                'message' => 'User login successfully'
            ];
            return response()->json($response,200);
        }
        else{
            $response = [
                'success' => false,
                'message' => 'Unauthorised'
            ];
            return response()->json($response);
        }
    }

    public function logout(Request $request)
{
    if (Auth::check()) {
        $request->user()->currentAccessToken()->delete();

        $response = [
            'success' => true,
            'message' => 'User logged out successfully'
        ];

        return response()->json($response, 200);
    } else {
        $response = [
            'success' => false,
            'message' => 'Unauthorised'
        ];

        return response()->json($response, 401);
    }
}

public function googlepage()
{
    return Socialite::driver('google')->stateless()->redirect();
}

public function googlecallback(Request $request)
{
    try {

        $googleUser = Socialite::driver('google')->stateless()->user();

        $findUser = User::where('google_id', $googleUser->id)
                        ->orWhere('email', $googleUser->email)
                        ->first();

        if ($findUser) {
            $token = $findUser->createToken('MyApp')->plainTextToken;

            return response()->json([
                'success' => true,
                'token' => $token,
                'user' => $findUser,
                'message' => 'User logged in successfully'
            ], 200);
        } else {
            $newUser = User::create([
                'name' => $googleUser->name,
                'email' => $googleUser->email,
                'google_id' => $googleUser->id,
                'password' => bcrypt('123456789')
            ]);

            $token = $newUser->createToken('MyApp')->plainTextToken;

            return response()->json([
                'success' => true,
                'token' => $token,
                'user' => $newUser,
                'message' => 'User registered and logged in successfully'
            ], 201);
        }

    } catch (Exception $e) {
        // Log the error for debugging
        \Log::error('Google Authentication failed: ' . $e->getMessage());

        return response()->json([
            'success' => false,
            'message' => 'Google Authentication failed',
            'error' => $e->getMessage()
        ], 500);
    }
}

public function checkUserRole(Request $request)
{
    $user = $request->user(); 

    if ($user) {
        return response()->json([
            'user_id' => $user->id,
            'role' => $user->role, 
        ]);
    }
    return response()->json(['error' => 'User not authenticated'], 401);
}

public function assignRole(Request $request)
{
    $request->validate([
        'user_id' => 'required|exists:users,id',  
        'role' => 'required|string|in:society-admin,society-member,super-admin,facility-partner,business-partner,user', 
    ]);

    $user = User::find($request->user_id);
    $user->role = $request->role;
    $user->save();

    return response()->json([
        'message' => 'Role assigned successfully',
        'user_id' => $user->id,
        'role' => $user->role
    ], 200);
}

public function getAllUsers(Request $request)
{
    $users = User::all();
    return response()->json($users, 200);
}

public function getAllProperties()
{
    $properties = PropertyUnapproved::all();
    return response()->json($properties, 200);
}

}