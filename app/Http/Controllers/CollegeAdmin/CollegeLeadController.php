<?php

namespace App\Http\Controllers\CollegeAdmin;

use App\Http\Controllers\Controller;
use App\Models\College;
use App\Models\CollegeAdminDashboard;
use App\Models\CollegeLead;
use App\Models\CollegeLeadRemark;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CollegeLeadController extends Controller
{
    public function index()
    {
        $admin_user_id = Auth::user()->id;
        $college_id = CollegeAdminDashboard::where('admin_id', $admin_user_id)->first()->college_id;
        $lead_list = CollegeLead::with('lead')->where('college_id', $college_id)->paginate(10);
        return response()->json([
            'is_success' => true,
            'data' => $lead_list,
            'message' => 'College Lead List',
        ]);
    }

    public function show($lead)
    {
        $lead_details = CollegeLead::with('lead')->where('id', $lead)->first();
        return response()->json([
            'is_success' => true,
            'data' => $lead_details,
            'message' => 'College Lead Details',
        ]);
    }

    public function storeRemark(Request $request)
    {
        $admin_user_id = Auth::user()->id;
        $college_id = CollegeAdminDashboard::where('admin_id', $admin_user_id)->first()->college_id;
        $lead_id = $request->lead;
        $remarks = $request->remarks;
        $status = $request->status;
        $x = new CollegeLeadRemark();
        $x->college_id = $college_id;
        $x->lead_id = $lead_id;
        $x->remarks = $remarks;
        $x->status = $status;
        $x->course_id = $request->course_id;
        $x->save();
        return response()->json([
            'is_success' => true,
            'message' => 'College Lead Remark Submitted',
        ]);
    }

    public function remarksIndex($lead)
    {
        $college_lead_remarks = CollegeLeadRemark::where('lead_id', $lead)->get();
        return response()->json([
            'is_success' => true,
            'data' => $college_lead_remarks,
            'message' => 'Remarks List',
        ]);
    }
}
