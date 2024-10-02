<?php

use App\Http\Controllers\Api\AdminController;
use App\Http\Controllers\Api\SocietyAdminController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\UserController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::controller(AuthController::class)->group(function(){
    Route::post('login','login');
    Route::post('register','register');
    Route::get('auth/google', 'googlepage');
    Route::get('auth/google/callback', 'googlecallback');
});

Route::middleware('auth:sanctum')->post('/logout', [AuthController::class, 'logout']);
Route::middleware('auth:sanctum')->get('/check-role', [AuthController::class, 'checkUserRole']);


Route::middleware('auth:sanctum')->post('/assign-role', [AdminController::class, 'assignRole']);
Route::middleware('auth:sanctum')->get('/all-users', [AdminController::class, 'getAllUsers']);
Route::middleware('auth:sanctum')->get('/all-properties', [AdminController::class, 'getAllProperties']);