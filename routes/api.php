<?php

use App\Http\Controllers\CollegeAdmin\AuthenticationController;
use App\Http\Controllers\CollegeAdmin\CollegeLeadController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::post('collegeadmin/login', [AuthenticationController::class, 'college_admin_login']);

Route::middleware(['auth:sanctum', 'college-admin-access'])->group(function () {
    Route::get('college/lead/list', [CollegeLeadController::class, 'lead_list']);
});
