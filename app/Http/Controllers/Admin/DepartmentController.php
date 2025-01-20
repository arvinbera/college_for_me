<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DepartmentController extends Controller
{
    public function add()
    {
        return view('admin.department.add');
    }

    public function list()
    {
        return view('admin.department.list');
    }

    public function edit($id)
    {
        return view('admin.department.edit', compact('id'));
    }
}
