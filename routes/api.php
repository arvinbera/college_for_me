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
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::post('collegeadmin/login', [AuthenticationController::class, 'college_admin_login']);

Route::middleware('auth:sanctum')->group(function(){
    Route::post('collegeadmin/logout',[AuthenticationController::class, 'api_logout']);
});

Route::middleware('auth:sanctum')->group(function () {
    Route::get('/verify-user/{token}', [AuthenticationController::class, 'user']);
});




// college Info 
Route::get('college-admin/college/edit/{id}',[CollegeinfoController::class,'edit']);
Route::post('college-admin/college/update/{id}',[CollegeinfoController::class,'update']);

// college contact
Route::get('college-admin/contact/edit/{id}',[CollegeContactController::class, 'edit']);
Route::post('college-admin/contact/update/{id}',[CollegeContactController::class, 'update']);

// college gallary
Route::get('college-admin/gallery/edit/{id}',[CollegeGalleryController::class,'edit']);
Route::post('college-admin/gallery/update/{id}',[CollegeGalleryController::class,'update']);

// college faculty
Route::get('college-admin/faculty/list',[FacultyController::class,'index']);
Route::get('college-admin/faculty/edit/{id}',[FacultyController::class, 'edit']);
Route::post('college-admin/faculty/update/{id}',[FacultyController::class, 'update']);

// college placement
Route::get('college-admin/placement/edit/{id}',[PlacementController::class, 'edit']);
Route::post('college-admin/placement/update/{id}',[PlacementController::class, 'update']);

// college article
Route::get('college-admin/article/list',[ArticleController::class, 'index']);

// college course
Route::get('college-admin/course/edit/{id}',[CourseController::class, 'edit']);
Route::post('college-admin/course/update/{id}',[CourseController::class, 'update']);
Route::get('college-admin/course/list',[CourseController::class, 'index']);


