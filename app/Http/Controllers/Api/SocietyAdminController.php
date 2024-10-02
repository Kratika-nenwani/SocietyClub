<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class SocietyAdminController extends Controller
{
    //
    public function getSocietyMembers()
    {

        $noticessw = auth()->user()->society_name;

        if (!empty($noticessw)) {
            $societyIds = json_decode($noticessw, true);
        
            if (is_array($societyIds)) {
                $members = User::where(function ($query) use ($societyIds) {
                    foreach ($societyIds as $societyId) {
                        $query->orWhereJsonContains('society_name', $societyId);
                    }
                })->where('role', 'society-member')->get();
        
                return response()->json([
                    'success' => true,
                    'members' => $members
                ], 200);
            } else {
                // If json_decode failed
                return response()->json([
                    'success' => false,
                    'message' => 'Invalid JSON format for society_name'
                ], 400);
            }
        } else {
            // If society_name is empty or null
            return response()->json([
                'success' => false,
                'message' => 'No society name provided for this user'
            ], 400);
        }
        
        }

    public function showFacilityPartners()
{
    $facilityPartners = User::where('role', 'facility-partner')->get();
    return response()->json([
        'success' => true,
        'members' => $facilityPartners
    ], 200);
}

public function showBusinessPartners()
{
    // Get only users with the role of 'facility-partner'
    $facilityPartners = User::where('role', 'business-partner')->get();

    return response()->json([
        'success' => true,
        'members' => $facilityPartners
    ], 200);
}

public function viewissue(){

    $userId = auth()->user()->society_name;

    // Get the society id linked to the admin
    $societyIds = $societyIds = json_decode($userId, true);

    // Fetch the issues for this society
    $issues = Issue::whereIn('society_id', $societyIds)->get();


}
}