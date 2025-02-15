<?php

use App\Http\Controllers\CollegeAdmin\AuthenticationController;
use App\Http\Controllers\CollegeAdmin\CollegeLeadController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::post('collegeadmin/login', [AuthenticationController::class, 'college_admin_login']);

Route::middleware(['auth:sanctum', 'college-admin-access'])->group(function () {
    Route::get('college/lead/list', [CollegeLeadController::class, 'lead_list']);
    Route::get('college/lead/details/{lead_id}', [CollegeLeadController::class, 'lead_details']);
    Route::post('college/lead/remark/submit', [CollegeLeadController::class, 'lead_remark_submit']);
    Route::get('college/lead/remark/list/{lead_id}', [CollegeLeadController::class, 'lead_remark_list']);
});
