<?php

namespace App\Http\Controllers\CollegeAdmin;

use App\Http\Controllers\Controller;
use App\Models\CollegeAdminDashboard;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class CollegeAdminController extends Controller
{
    public function add_college_admin($college_id)
    {
        return view('admin.college.collegeadmin.add', compact('college_id'));
    }

    public function add_college_admin_submit(Request $request)
    {
        $entity = new User();
        $entity->name = $request->name;
        $entity->email = $request->email;
        $entity->password = Hash::make($request->password);
        $entity->role = 2;
        $entity->save();
        $x = new CollegeAdminDashboard();
        $x->college_id = $request->college_id;
        $x->admin_id = $entity->id;
        $x->save();
        flash('College Admin Added Successfully');
        return redirect()->back();
    }
}
