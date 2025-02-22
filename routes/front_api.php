<?php

use App\Http\Controllers\Frontend\FrontApiController;
use App\Http\Controllers\Frontend\FrontCollegeApiController;
use App\Http\Controllers\Frontend\SearchController;
use Illuminate\Support\Facades\Route;

Route::post('college/submit', [FrontApiController::class, 'submit_application']);
Route::post('college/claim', [FrontApiController::class, 'claim_application']);
Route::get('college/search/{key}', [SearchController::class, 'header_search']);
Route::get('colleges/', [SearchController::class, 'college_filter_search']);
Route::get('college/{college_id}/info', [FrontCollegeApiController::class, 'college_info_details']);
Route::get('college/{college_id}/address', [FrontCollegeApiController::class, 'college_address_details']);
Route::get('college/{college_id}/course-department', [FrontCollegeApiController::class, 'college_course_department_details']);
Route::get('college/{college_id}/faculty', [FrontCollegeApiController::class, 'college_faculty_details']);
