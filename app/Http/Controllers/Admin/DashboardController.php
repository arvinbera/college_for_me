<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\College;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboard()
    {
        $college_count = College::count();
        return view('admin.dashboard', compact('college_count'));
    }
}
