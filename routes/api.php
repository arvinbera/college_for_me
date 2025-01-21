<?php

use App\Http\Controllers\CollegeAdmin\AuthenticationController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::post('collegeadmin/login', [AuthenticationController::class, 'college_admin_login']);
Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
