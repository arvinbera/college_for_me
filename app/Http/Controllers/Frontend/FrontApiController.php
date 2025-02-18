<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\CollegeApplication;
use App\Models\CollegeClaim;
use Illuminate\Http\Request;

class FrontApiController extends Controller
{
    public function submit_application(Request $request)
    {
        $request->validate([
            'college_id' => 'required',
            'student_name' => 'required',
            'student_email' => 'required',
            'phone' => 'required',
            'course_id' => 'required',
            'state_id' => 'required',
        ], [
            'college_id.required' => 'College ID is required.',
            'student_name.required' => 'Student Name is required.',
            'student_email.required' => 'Student Email is required.',
            'phone.required' => 'Phone is required.',
            'course_id.required' => 'Course ID is required.',
            'state_id.required' => 'State ID is required.',
        ]);

        $entity = new CollegeApplication();
        $entity->college_id = $request->college_id;
        $entity->student_name = $request->student_name;
        $entity->student_email = $request->student_email;
        $entity->phone = $request->phone;
        $entity->course_id = $request->course_id;
        $entity->state_id = $request->state_id;
        $entity->save();
        return response()->json([
            'is_success' => true,
            'message' => 'Application Submitted Successfully.',
        ],);
    }

    public function claim_application(Request $request)
    {
        $request->validate([
            'college_id' => 'required',
            'name' => 'required',
            'official_email' => 'required',
            'phone' => 'required',
            'designation' => 'required',
        ], [
            'college_id.required' => 'College ID is required.',
            'name.required' => 'Name is required.',
            'official_email.required' => 'Official Email is required.',
            'phone.required' => 'Phone is required.',
            'designation.required' => 'Designation is required.',
        ]);

        $entity = new CollegeClaim();
        $entity->college_id = $request->college_id;
        $entity->name = $request->name;
        $entity->official_email = $request->official_email;
        $entity->phone = $request->phone;
        $entity->designation = $request->designation;
        $entity->save();
        return response()->json([
            'is_success' => true,
            'message' => 'Application Submitted Successfully.',
        ]);
    }
}
