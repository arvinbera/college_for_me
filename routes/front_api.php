<?php

use App\Http\Controllers\Frontend\FrontApiController;
use App\Http\Controllers\Frontend\FrontCollegeApiController;
use App\Http\Controllers\Frontend\SearchController;
use Illuminate\Support\Facades\Route;

Route::post('colleges/submit', [FrontApiController::class, 'submit_application']);
Route::post('colleges/claim', [FrontApiController::class, 'claim_application']);
Route::get('colleges/search/{key}', [SearchController::class, 'header_search']);
Route::get('colleges/', [SearchController::class, 'college_filter_search']);
Route::get('colleges/{college_slug}', [FrontCollegeApiController::class, 'college_info_details']);
Route::get('colleges/{college_slug}/address', [FrontCollegeApiController::class, 'college_address_details']);
Route::get('colleges/{college_slug}/course-department', [FrontCollegeApiController::class, 'college_course_department_details']);
Route::get('colleges/{college_slug}/faculty', [FrontCollegeApiController::class, 'college_faculty_details']);
