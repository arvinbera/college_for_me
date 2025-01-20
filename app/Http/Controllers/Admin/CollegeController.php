<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CollegeController extends Controller
{
    public function add()
    {
        return view('admin.college.add.add');
    }

    public function address()
    {
        return view('admin.college.add.address');
    }

    public function faculty()
    {
        return view('admin.college.add.faculty');
    }

    public function course_department()
    {
        return view('admin.college.add.course_department');
    }

    public function gallery()
    {
        return view('admin.college.add.gallery');
    }
}
