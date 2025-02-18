<?php

namespace App\Http\Controllers\Counselor;

use App\Http\Controllers\Controller;
use App\Models\AllLead;
use App\Models\College;
use App\Models\CollegeLead;
use App\Models\CounselorLead;
use App\Models\Course;
use App\Models\Leadfollowup;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CounselorLeadController extends Controller
{
    public function counselor_leads()
    {
        $counselor_id = Auth::user()->id;
        $counselor_leads = CounselorLead::with('lead')
            ->where('counselor_id', $counselor_id)
            ->where('is_active', 1)
            ->paginate(2);
        return view('counselor.lead.list', compact('counselor_leads'));
    }

    public function counselor_lead_details($lead_id)
    {
        $lead_details = AllLead::where('id', $lead_id)->first();
        $all_courses = Course::all();
        $colleges = College::where('lead_model', 2)->get();
        $lead_remarks = Leadfollowup::where('lead_id', $lead_id)->orderBy('id', 'desc')->paginate(5);
        $lead_transfer_colleges = CollegeLead::with('college')->where('lead_id', $lead_id)->get();
        return view('counselor.lead.details', compact('lead_details', 'all_courses', 'colleges', 'lead_remarks', 'lead_transfer_colleges'));
    }

    public function counselor_remarks_submit(Request $request)
    {
        $counselor_id = Auth::user()->id;
        $lead_id = $request->lead_id;
        $entity = new Leadfollowup();
        $entity->counselor_id = $counselor_id;
        $entity->lead_id = $lead_id;
        $entity->remarks = $request->remarks;
        // $entity->status = $request->status;
        $entity->course_id = $request->course_id;
        $entity->follow_up_status = $request->follow_up_status;
        $entity->save();
        $lead_details = AllLead::where('id', $lead_id)->first();
        $lead_details->status = $request->status;
        $lead_details->update($lead_details->toArray());
        flash('Successfully added remarks');
        return redirect()->back();
    }

    public function counselor_send_to_college(Request $request)
    {
        $counselor_id = Auth::user()->id;
        $college_ids = $request->college_id;
        foreach ($college_ids as $college_id) {
            $entity = new CollegeLead();
            $entity->counselor_id = $counselor_id;
            $entity->college_id = $college_id;
            $entity->lead_id = $request->lead_id;
            $entity->save();
        }
        flash('Successfully sent to colleges');
        return redirect()->back();
    }

    public function counselor_interested_leads()
    {
        $counselor_leads = CounselorLead::with('lead')
        ->whereHas('lead', function ($q) {
            $q->where('status', 1);
        })
            ->where('is_active', 1)
            ->where('counselor_id', Auth::user()->id)
            ->paginate(5);
        return view('counselor.lead.interested', compact('counselor_leads'));
    }

    public function counselor_not_interested_leads()
    {
        $counselor_leads = CounselorLead::with('lead')
        ->whereHas('lead', function ($q) {
            $q->where('status', 2);
        })
            ->where('is_active', 1)
            ->where('counselor_id', Auth::user()->id)
            ->paginate(5);
        return view('counselor.lead.notinterested', compact('counselor_leads'));
    }
    public function counselor_admitted_leads()
    {
        $counselor_leads = CounselorLead::with('lead')
        ->whereHas('lead', function ($q) {
            $q->where('status', 2);
        })
            ->where('is_active', 1)
            ->where('counselor_id', Auth::user()->id)
            ->paginate(5);
        return view('counselor.lead.admitted', compact('counselor_leads'));
    }
    public function counselor_no_response_leads()
    {
        $counselor_leads = CounselorLead::with('lead')
        ->whereHas('lead', function ($q) {
            $q->where('status', 3);
        })
            ->where('is_active', 1)
            ->where('counselor_id', Auth::user()->id)
            ->paginate(5);
        return view('counselor.lead.admitted', compact('counselor_leads'));
    }
}
