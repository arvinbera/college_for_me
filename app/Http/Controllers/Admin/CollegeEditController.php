<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CollegeEditController extends Controller
{
    public function college_info_edit($college_id)
    {
        return view('admin.college.edit.info', compact('college_id'));
    }

    public function college_address_edit($college_id)
    {
        return view('admin.college.edit.address', compact('college_id'));
    }

    public function college_course_edit($college_id)
    {
        return view('admin.college.edit.course', compact('college_id'));
    }

    public function college_course_fees_eligibility_list($college_id)
    {
        return view('admin.college.edit.courseeligibility', compact('college_id'));
    }

    public function college_course_fees_eligibility_edit($course_fees_id, $college_id)
    {
        return view('admin.college.edit.coursefeeseligibility', compact('course_fees_id', 'college_id'));
    }

    public function college_faculty_list($college_id)
    {
        return view('admin.college.edit.faculty.list', compact('college_id'));
    }

    public function college_faculty_edit($faculty_id)
    {
        return view('admin.college.edit.faculty.edit', compact('faculty_id'));
    }

    public function college_gallery_edit($college_id)
    {
        return view('admin.college.edit.gallery', compact('college_id'));
    }

    public function college_placement_edit($college_id)
    {
        return view('admin.college.edit.placements', compact('college_id'));
    }

    public function college_add_new_course($college_id)
    {
        return view('admin.college.edit.course.index', compact('college_id'));
    }

    public function college_faculty_new($college_id)
    {
        return view('admin.college.edit.faculty.new', compact('college_id'));
    }
}
