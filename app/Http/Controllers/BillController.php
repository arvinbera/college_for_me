<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bill;
use App\Models\College;

class BillController extends Controller
{
    public function lead_model_list()
    {
        return view('admin.bill.lead_model_list');
    }

    public function store(Request $request)
    {
        $entity= new Bill();
        $entity->college_id = $request->college_id;
        $entity->gst_type = $request->gst_type;
        $entity->bill_type = $request->bill_type;
        $entity->course_duration = $request->course_duration;
        $entity->location = $request->location;
        $entity->email = $request->email;
        $entity->gst_number_college	= $request->gst_number_college;
        $entity->receipt_date = $request->receipt_date;
        $entity->phone = $request->phone;
        $entity->payment_mode;
        $entity->save();
        flash('Bill added successfully');
    }

    public function lead_model_add()
    {
        $all_colleges = College::all();
        return view('admin.bill.lead_model_add', compact('all_colleges'));
    }
}
