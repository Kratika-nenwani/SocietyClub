<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\PropertyUnapproved;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
public function getAllProperties()
{
    $properties = PropertyUnapproved::all();
    $response = [
        'success' => true,
        'data' => $properties,
        'message' => 'Properties fetched successfully'
    ];
    
    return response()->json($response,200);
}
public function getAllUsers(Request $request)
{
    $users = User::all();
    $response = [
        'success' => true,
        'data' => $users,
        'message' => 'User detched successfully'
    ];
    
    return response()->json($response,200);
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
}
