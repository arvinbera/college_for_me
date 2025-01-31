<?php

namespace App\Http\Controllers\Lead;

use App\Http\Controllers\Controller;
use App\Imports\LeadImport;
use App\Models\AllLead;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class LeadController extends Controller
{
    public function lead_add()
    {
        return view('lead.leads.add');
    }

    public function bulk_upload()
    {
        return view('lead.leads.bulk');
    }

    public function bulk_upload_submit(Request $request)
    {
        $request->validate([
            'file' => 'required|max:2048',
        ]);

        Excel::import(new LeadImport, $request->file('file'));
        flash('Lead Added Successfully');
        return redirect()->back();
    }

    public function lead_add_submit(Request $request)
    {
        $entity = new AllLead();
        $entity->name = $request->name;
        $entity->location = $request->location;
        $entity->email = $request->email;
        $entity->phone = $request->phone;
        $entity->academic_year = $request->academic_year;
        $entity->lead_source = $request->lead_source;
        $entity->save();
        flash('Lead Added Successfully');
        return redirect()->back();
    }

    public function lead_list()
    {
        $leads = AllLead::paginate(3);
        return view('lead.leads.list', compact('leads'));
    }

    public function lead_edit($lead_id)
    {
        $lead_details = AllLead::where('id', $lead_id)->first();
        return view('lead.leads.edit', compact('lead_details'));
    }

    public function lead_details($lead_id)
    {
        $lead_details = AllLead::where('id', $lead_id)->first();
        return view('lead.leads.details', compact('lead_details'));
    }

    public function lead_update(Request $request)
    {
        $lead_details = AllLead::where('id', $request->id)->first();
        $lead_details->name = $request->name;
        $lead_details->location = $request->location;
        $lead_details->email = $request->email;
        $lead_details->phone = $request->phone;
        $lead_details->academic_year = $request->academic_year;
        $lead_details->lead_source = $request->lead_source;
        $lead_details->update($lead_details->toArray());
        flash('Lead Updated Successfully');
        return redirect()->back();
    }
}
