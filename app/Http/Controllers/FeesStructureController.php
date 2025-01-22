<?php

namespace App\Http\Controllers;

use App\Models\FeesStructure;
use App\Models\Course;
use Illuminate\Http\Request;

class FeesStructureController extends Controller
{
    public function index()
    {
        $fees_structure = FeesStructure::all();
        return view('admin.feesstructure.index', compact('fees_structure'));
    }

    public function add()
    {
        $courses = Course::all();
        return view('admin.feesstructure.add',compact('courses'));
    }

    public function store(Request $request)
    {
        $entity = new FeesStructure();
        $entity->course_id = $request->course_id;
        $entity->fees_structure	= $request->fees_structure;
        $entity->eligibility = $request->eligibility;
        $entity->save();
        return redirect()->back();

    }
}
