<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bill;
use App\Models\College;

class BillController extends Controller
{
    public function original_list()
    {
        $bills = Bill::where('bill_type', 'Original')->get();
        return view('admin.bill.lead_model_list', compact('bills'));
    }

    public function proforma_list()
    {
        $proforma_bills = Bill::where('bill_type', 'Proforma')->get();
        return view('admin.bill.proforma_list', compact('proforma_bills'));
    }

    public function store(Request $request)
    {
        if ($request->bill_type == "Proforma"){
            $entity= new Bill();
            $entity->college_id = $request->college_id;
            $entity->gst_type = $request->gst_type;
            $entity->bill_type = $request->bill_type;
            $entity->course_duration = $request->course_duration;
            $entity->location = $request->location;
            $entity->email = $request->email;
            $entity->total	= $request->proforma_total_amount;
            $entity->recived_amount = (float)($request->proforma_total_amount) / 1.18;
            $entity->due_amount = ((float)$entity->total ?? 0) - ((float)$entity->recived_amount ?? 0);
            $entity->cgst = ((float)$entity->total ?? 0) - ((float)$entity->received_amount ?? 0) / 2;
            $entity->sgst = ((float)$entity->total ?? 0) - ((float)$entity->received_amount ?? 0) / 2;
            if ($entity->total !== null && $entity->received_amount !== null) {
                $entity->igst = (float)$entity->total - (float)$entity->received_amount;
            } else {
                $entity->igst = 0; 
            }
            
            $entity->gst_number_college	= $request->gst_number_college;
            $entity->receipt_date = $request->receipt_date;
            $entity->phone = $request->phone;
            $entity->payment_mode = $request->payment_mode;
            if ($request->payment_mode == "Online"){
                $entity->transaction_id = $request->transaction_id;
            } elseif ($request->payment_mode == "cheque") {
                $entity->bank_name = $request->bank_name;
                $entity->check_number = $request->check_number;
            }
            $entity->save();
            flash('Bill added successfully');
            return redirect()->back();
        }
        // return $request;
        $entity= new Bill();
        $entity->college_id = $request->college_id;
        $entity->gst_type = $request->gst_type;
        $entity->bill_type = $request->bill_type;
        $entity->course_duration = $request->course_duration;
        $entity->location = $request->location;
        $entity->email = $request->email;
        $entity->total	= $request->total;
        $entity->recived_amount = (float)($request->recived_amount);
        $entity->due_amount = ((float)$entity->total ?? 0) - ((float)$entity->recived_amount ?? 0);
        $entity->cgst = ($request->recived_amount * (1 - (1 / 1.18))) / 2;
        $entity->sgst = $entity->sgst = ($request->recived_amount * (1 - (1 / 1.18))) / 2;
        $entity->igst = ($request->recived_amount * (1 - (1 / 1.18)));
        
        $entity->gst_number_college	= $request->gst_number_college;
        $entity->receipt_date = $request->receipt_date;
        $entity->phone = $request->phone;
        $entity->payment_mode = $request->payment_mode;
        if ($request->payment_mode == "Online"){
            $entity->transaction_id = $request->transaction_id;
        } elseif ($request->payment_mode == "cheque") {
            $entity->bank_name = $request->bank_name;
            $entity->check_number = $request->check_number;
        }
    
        $entity->save();
        flash('Bill added successfully');
        return redirect()->back();

    }

    public function original_edit($id)
    {
        $bill_edit = Bill::where('id', $id)->first();
        $all_colleges = College::all();
        return view('admin.bill.original_edit', compact('bill_edit', 'all_colleges'));
    }

    public function original_update(Request $request,$id)
    {
        $bill_update = Bill::where('id', $id)->first();
        $bill_update->college_id = $request->college_id;
        $bill_update->gst_type = $request->gst_type;
        $bill_update->bill_type = $request->bill_type;
        $bill_update->course_duration = $request->course_duration;
        $bill_update->location = $request->location;
        $bill_update->email = $request->email;
        $bill_update->total	= $request->total;
        $bill_update->recived_amount = (float)($request->recived_amount);
        $bill_update->due_amount = ((float)$bill_update->total ?? 0) - ((float)$bill_update->recived_amount ?? 0);
        $bill_update->cgst = ($request->recived_amount * (1 - (1 / 1.18))) / 2;
        $bill_update->sgst = $bill_update->sgst = ($request->recived_amount * (1 - (1 / 1.18))) / 2;
        $bill_update->igst = ($request->recived_amount * (1 - (1 / 1.18)));
        
        $bill_update->gst_number_college	= $request->gst_number_college;
        $bill_update->receipt_date = $request->receipt_date;
        $bill_update->phone = $request->phone;
        $bill_update->update($bill_update->toArray());
        flash('Original Bill has been updated successfully');
        return redirect()->back();
    }

    public function proforma_edit(Request $request, $id)
    {
        $bill_edit = Bill::where('id', $id)->first();
        $all_colleges = College::all();
        return view('admin.bill.proforma_edit', compact('bill_edit', 'all_colleges'));
    }

    public function proforma_update(Request $request,$id)
    {
        $proforma_update = Bill::where('id', $id)->first();
        $proforma_update->college_id = $request->college_id;
        $proforma_update->gst_type = $request->gst_type;
        $proforma_update->bill_type = $request->bill_type;
        $proforma_update->course_duration = $request->course_duration;
        $proforma_update->location = $request->location;
        $proforma_update->email = $request->email;
        $proforma_update->total	= $request->proforma_total_amount;
        $proforma_update->recived_amount = (float)($request->proforma_total_amount) / 1.18;
        $proforma_update->due_amount = ((float)$proforma_update->total ?? 0) - ((float)$proforma_update->recived_amount ?? 0);
        $proforma_update->cgst = ((float)$proforma_update->total ?? 0) - ((float)$proforma_update->received_amount ?? 0) / 2;
        $proforma_update->sgst = ((float)$proforma_update->total ?? 0) - ((float)$proforma_update->received_amount ?? 0) / 2;
        if ($proforma_update->total !== null && $proforma_update->received_amount !== null) {
            $proforma_update->igst = (float)$proforma_update->total - (float)$proforma_update->received_amount;
        } else {
            $proforma_update->igst = 0; 
        }
        
        $proforma_update->gst_number_college	= $request->gst_number_college;
        $proforma_update->receipt_date = $request->receipt_date;
        $proforma_update->phone = $request->phone;
        $proforma_update->payment_mode = $request->payment_mode;
        $proforma_update->update($proforma_update->toArray());
        flash('Original Bill has been updated successfully');
        return redirect()->back();
    }

    public function lead_model_add()
    {
        $all_colleges = College::all();
        return view('admin.bill.lead_model_add', compact('all_colleges'));
    }
}
