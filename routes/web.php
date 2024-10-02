<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\GoogleController;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('auth.login');
});

Route::get('/indexmain',[HomeController::class,'indexmain'])->name('indexmain');
Route::get('/listing',[HomeController::class,'listing'])->name('listing');
Route::get('/about',[HomeController::class,'about'])->name('about');
Route::get('/contact',[HomeController::class,'contact'])->name('contact');

Auth::routes();


Route::get('/home', [AdminController::class, 'index'])->name('home');

Route::get('/facility-partner/{id}/edit', [AdminController::class, 'edit']);
Route::put('/facility-partner/{id}', [AdminController::class, 'updates']);
Route::delete('/facility-partner/{id}', [AdminController::class, 'destroyFacilityPartner'])->name('facility-partner.destroy');
Route::get('/facility-partner', [AdminController::class, 'showFacilityPartners'])->name('facility-partner');
Route::post('/save-facilityPartner', [AdminController::class, 'saveFacilityPartner'])->name('save-facilityPartner');
Route::post('/save-businessPartner', [AdminController::class, 'saveBusinessPartner'])->name('save-businessPartner');

Route::get('/business-partner', [AdminController::class, 'showBusinessPartners'])->name('business-partner');
Route::get('/business-partner-details/{id}', [AdminController::class, 'BusinessPartnerDetails'])->name('business-partner-details');
Route::post('/save-businessPartner', [AdminController::class, 'saveBusinessPartner'])->name('save-businessPartner');


Route::get('/gallery/{id}/manage-images', [AdminController::class, 'manageImages'])->name('manage-image');
Route::post('/gallery/{id}/delete-image', [AdminController::class, 'deleteImage'])->name('gallery.deleteImage');
Route::post('/gallery/{id}/add-image', [AdminController::class, 'addImage'])->name('gallery.addImage');


Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');
Route::get('/create-listing', [AdminController::class, 'createlisting'])->name('create-listing');
Route::post('save-property',[AdminController::class,'save_property'])->name('save-property');
Route::get('index-main',[AdminController::class,'index_main'])->name('index-main');
Route::get('registered-users',[AdminController::class,'registered_users'])->name('registered-users');
Route::post('/update-role', [AdminController::class, 'updateRole'])->name('update.role');
Route::get('/property-list', [AdminController::class, 'showPropertyList'])->name('property-list');
Route::delete('/property-delete/{id}', [AdminController::class, 'deleteProperty'])->name('delete-property');


Route::get('/account-settings', [AdminController::class, 'accountsettings'])->name('account-settings');
Route::post('/account-settings/update', [AdminController::class, 'updateProfile'])->name('profile.update');

Route::get('/profile', [AdminController::class, 'profile'])->name('profile');

Route::get('/society-members', [AdminController::class, 'showSocietyMembers'])->name('society-members');
Route::delete('/society-members/{id}', [AdminController::class, 'destroySocietyMember'])->name('society-members.destroy');
Route::get('/society-members-details/{id}', [AdminController::class, 'get'])->name('society-members-details');
Route::post('/society-members/{id}', [AdminController::class, 'update'])->name('update-society-member');
Route::post('/save-society-member', [AdminController::class, 'saveSocietyMember'])->name('save-society-member');

Route::get('/my-properties', [AdminController::class, 'my_properties'])->name('my-properties');
Route::post('/update-role', [AdminController::class, 'update_role']);
Route::post('/addsocietyname', [AdminController::class, 'addsocietyname']);

Route::get('/gallery', [AdminController::class, 'showgallery'])->name('gallery');
Route::post('/gallery', [AdminController::class, 'saveGallery'])->name('gallery.save');

Route::delete('/gallery/delete/{id}', [AdminController::class, 'deleteGallery'])->name('gallery.delete');


Route::get('/notice-board', [AdminController::class, 'viewNoticeBoard'])->name('notice-board');
Route::post('/save-notice', [AdminController::class, 'saveNotice'])->name('save-notice');

Route::get('/issue', [AdminController::class, 'viewissue'])->name('issue');
Route::post('/resolve-issue/{id}', [AdminController::class, 'resolveIssue'])->name('resolveIssue');
Route::post('/send-message/{id}', [AdminController::class, 'sendMessage'])->name('sendMessage');

Route::post('/update-status', [AdminController::class, 'updateStatus']);

Route::get('auth/google', [GoogleController::class, 'googlepage']);
Route::get('auth/google/callback', [GoogleController::class, 'googlecallback']);


Route::get('/view-request', [AdminController::class, 'viewRequests'])->name('view-request');