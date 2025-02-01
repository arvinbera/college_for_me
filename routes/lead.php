<?php

use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Lead\CounselorController;
use App\Http\Controllers\Lead\DashboardController;
use App\Http\Controllers\Lead\LeadController;
use Illuminate\Support\Facades\Route;

Route::middleware('lead-access')->group(function () {
    Route::get('lead/dashboard', [DashboardController::class, 'dashboard'])->name('lead.dashboard');
    //Lead Manage
    Route::get('lead/add', [LeadController::class, 'lead_add'])->name('lead.add');
    Route::get('lead/list', [LeadController::class, 'lead_list'])->name('lead.list');
    Route::get('lead/edit/{lead_id}', [LeadController::class, 'lead_edit'])->name('lead.edit');
    Route::get('lead/details/{lead_id}', [LeadController::class, 'lead_details'])->name('lead.details');
    Route::get('lead/bulk', [LeadController::class, 'bulk_upload'])->name('lead.bulk');
    Route::post('lead/bulk/upload', [LeadController::class, 'bulk_upload_submit'])->name('lead.bulk.upload');
    Route::post('lead/submit', [LeadController::class, 'lead_add_submit'])->name('lead.submit');
    Route::post('lead/update', [LeadController::class, 'lead_update'])->name('lead.update');
    Route::get('lead/assign/counselor', [CounselorController::class, 'counselor_assign'])->name('lead.assign.counselor');
    Route::post('lead/assign/counselor/submit', [CounselorController::class, 'counselor_assign_submit'])->name('lead.assign.counselor.submit');
    //Counselor Manage
    Route::get('counselor/add', [CounselorController::class, 'counselor_add'])->name('counselor.add');
    Route::get('counselor/list', [CounselorController::class, 'counselor_list'])->name('counselor.list');
    Route::post('counselor/submit', [CounselorController::class, 'counselor_submit'])->name('counselor.submit');
    Route::get('counselor/edit/{id}', [CounselorController::class, 'counselor_edit'])->name('counselor.edit');
    Route::post('counselor/update', [CounselorController::class, 'counselor_update'])->name('counselor.update');
    
    Route::get('lead/logout', [AuthController::class, 'lead_admin_logout'])->name('lead.logout');
});
