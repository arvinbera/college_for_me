<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\CourseCategory;
use Illuminate\Http\Request;
use Str;

class CourseController extends Controller
{
    public function course_list()
    {
        $courses = Course::all();
        return view('admin.course.list', compact('courses'));
    }

    public function course_add()
    {
        $course_categories = CourseCategory::all();
        return view('admin.course.add', compact('course_categories'));
    }

    public function course_edit($id)
    {
        $course_details = Course::where('id', $id)->first();
        $course_categories = CourseCategory::all();
        return view('admin.course.edit', compact('course_details', 'course_categories'));
    }

    public function course_submit(Request $request)
    {
        $request->validate([
            'course_name' => 'required',
            'course_duration' => 'required',
        ], [
            'course_name.required' => 'Course name is required.',
            'course_duration.required' => 'Course duration is required.',
        ]);
        // return $request->all();
        $entity = new Course();
        $entity->course_name = $request->course_name;
        $entity->course_slug = Str::slug($request->course_name);
        $entity->course_duration = $request->course_duration;
        $entity->course_category_id = $request->course_category_id;
        $entity->save();
        flash('Course added successfully.');

        return redirect()->back();
    }

    public function course_update(Request $request)
    {
        $course = Course::where('id', $request->id)->first();
        $course->course_name = $request->course_name;
        $course->course_slug = Str::slug($request->course_name);
        $course->course_category_id = $request->course_category_id;
        $course->course_duration = $request->course_duration;
        $course->update($course->toArray());

        flash('Course updated successfully.');

        return redirect()->route('course.list');
    }
}
