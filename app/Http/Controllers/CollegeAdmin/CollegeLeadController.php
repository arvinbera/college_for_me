<?php

namespace App\Http\Controllers\CollegeAdmin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CollegeLeadController extends Controller
{
    public function lead_list()
    {

        return response()->json(['message' => 'Hello World']);
    }
}
