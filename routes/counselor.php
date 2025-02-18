<?php

use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Counselor\CounselorLeadController;
use App\Http\Controllers\Counselor\DashboardController;
use Illuminate\Support\Facades\Route;

Route::middleware('counselor-access')->group(
    function () {
        Route::get('counselor/dashboard', [DashboardController::class, 'dashboard'])->name('counselor.dashboard');
        Route::get('counselor/leads', [CounselorLeadController::class, 'counselor_leads'])->name('counselor.leads');
        Route::get('counselor/interested/leads', [CounselorLeadController::class, 'counselor_interested_leads'])->name('counselor.interested.leads');
        Route::get('counselor/notinterested/leads', [CounselorLeadController::class, 'counselor_not_interested_leads'])->name('counselor.not.interested.leads');
        Route::get('counselor/noresponse/leads', [CounselorLeadController::class, 'counselor_no_response_leads'])->name('counselor.not.response.leads');
        Route::get('counselor/admitted/leads', [CounselorLeadController::class, 'counselor_admitted_leads'])->name('counselor.admitted.leads');
        Route::get('counselor/leads/{lead_id}', [CounselorLeadController::class, 'counselor_lead_details'])->name('counselor.lead.details');
        Route::post('counselor/remarks/submit', [CounselorLeadController::class, 'counselor_remarks_submit'])->name('counselor.remarks.submit');
        Route::post('counselor/send_to_college', [CounselorLeadController::class, 'counselor_send_to_college'])->name('counselor.send_to_college');
        Route::get('counselor/logout', [AuthController::class, 'counselor_logout'])->name('counselor.logout');
    }
);
