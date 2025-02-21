<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CourseCategoryController extends Controller
{
    public function course_category_add()
    {
        return view('admin.course_category.add');
    }

    public function course_category_list()
    {
        return view('admin.course_category.list');
    }
}
