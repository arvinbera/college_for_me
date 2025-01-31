<?php

namespace App\Http\Controllers\Lead;

use App\Http\Controllers\Controller;
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
}
