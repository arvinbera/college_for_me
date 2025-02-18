<?php

namespace App\Http\Controllers\Lead;

use App\Http\Controllers\Controller;
use App\Models\AllLead;
use App\Models\CounselorLead;
use App\Models\User;
use Illuminate\Http\Request;

class CounselorController extends Controller
{
    public function counselor_add()
    {
        return view('lead.counselor.add');
    }

    public function counselor_submit(Request $request)
    {
        $entity = new User();
        $entity->name = $request->name;
        $entity->email = $request->email;
        $entity->password = bcrypt("123456");
        $entity->role = 5;
        $entity->save();
        flash('Counselor Added Successfully');
        return redirect()->back();
    }

    public function counselor_list()
    {
        $counselors = User::where('role', 5)->paginate(10);
        return view('lead.counselor.list', compact('counselors'));
    }

    public function counselor_edit($counselor_id)
    {
        $counselor_details = User::where('id', $counselor_id)->first();
        return view('lead.counselor.edit', compact('counselor_details'));
    }

    public function counselor_update(Request $request)
    {
        $counselor_details = User::where('id', $request->id)->first();
        $counselor_details->name = $request->name;
        $counselor_details->email = $request->email;
        $counselor_details->update($counselor_details->toArray());
        flash('Counselor Updated Successfully');
        return redirect()->back();
    }

    public function counselor_assign()
    {
        $assign_lead_list = AllLead::where('status', 0)->get();
        $counselors = User::where('role', 5)->get();
        return view('lead.counselor.assign', compact('assign_lead_list', 'counselors'));
    }

    public function counselor_assign_submit(Request $request)
    {
        $leads = $request->lead;
        foreach ($leads as $lead) {
            $entity = new CounselorLead();
            $entity->counselor_id = $request->counselor_id;
            $entity->lead_id = $lead;
            $entity->status = 0;
            $entity->is_active = 1;
            $entity->save();
            $lead_details = AllLead::where('id', $lead)->first();
            $lead_details->status = 6;
            $lead_details->update($lead_details->toArray());
        }
        flash('Lead Assigned Successfully');
        return redirect()->back();
    }
}
