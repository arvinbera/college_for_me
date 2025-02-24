<?php

use App\Http\Controllers\apicontroller\ArticleController;
use App\Http\Controllers\apicontroller\CollegeContactController;
use App\Http\Controllers\apicontroller\CollegeGalleryController;
use App\Http\Controllers\apicontroller\CollegeinfoController;
use App\Http\Controllers\apicontroller\FacultyController;
use App\Http\Controllers\apicontroller\CourseController;
use App\Http\Controllers\apicontroller\PlacementController;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\CollegeAdmin\AuthenticationController;
use App\Http\Controllers\CollegeAdmin\CollegeLeadController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;




// Authentication
Route::prefix('auth')->group(function () {
    // Login (non‐protected, as it creates a token)
    Route::post('login', [AuthenticationController::class, 'college_admin_login']);

    Route::middleware('auth:sanctum')->group(function () {
        // Logout
        Route::post('logout', [AuthenticationController::class, 'api_logout']);
        // Verify user (token passed as route parameter or query string)
        Route::get('verify/{token}', [AuthenticationController::class, 'verify_user']);
    });
});

// College Admin Resources (protected by Sanctum)
Route::prefix('college-admin')->middleware('auth:sanctum')->group(function () {
    // College resource – use GET to retrieve and PUT to update.
    Route::get('colleges/{id}', [CollegeinfoController::class, 'show']);
    Route::put('colleges/{id}', [CollegeinfoController::class, 'update']);

    // College Contact resource
    Route::get('contacts/{id}', [CollegeContactController::class, 'show']);
    Route::put('contacts/{id}', [CollegeContactController::class, 'update']);

    // College Gallery resource
    Route::get('galleries/{id}', [CollegeGalleryController::class, 'show']);
    Route::put('galleries/{id}', [CollegeGalleryController::class, 'update']);

    // Faculty resource
    Route::get('faculties', [FacultyController::class, 'index']);
    Route::get('faculties/{id}', [FacultyController::class, 'show']);
    Route::put('faculties/{id}', [FacultyController::class, 'update']);

    // Placement resource
    Route::get('placements/{id}', [PlacementController::class, 'show']);
    Route::put('placements/{id}', [PlacementController::class, 'update']);

    // Article resource (listing only)
    Route::get('articles', [ArticleController::class, 'index']);

    // Course resource
    Route::get('courses', [CourseController::class, 'index']);
    Route::get('courses/{id}', [CourseController::class, 'show']);
    Route::put('courses/{id}', [CourseController::class, 'update']);
});

// College Leads & Remarks (with additional access control)
Route::prefix('college')->middleware(['auth:sanctum', 'college-admin-access'])->group(function () {
    // Leads resource – listing and details.
    Route::get('leads', [CollegeLeadController::class, 'index']);
    Route::get('leads/{lead}', [CollegeLeadController::class, 'show']);

    // Nested lead remarks as a sub-resource.
    Route::get('leads/{lead}/remarks', [CollegeLeadController::class, 'remarksIndex']);
    Route::post('leads/{lead}/remarks', [CollegeLeadController::class, 'storeRemark']);
});
