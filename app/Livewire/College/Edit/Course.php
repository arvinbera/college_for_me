<?php

namespace App\Livewire\College\Edit;

use App\Models\CollegeCourseDepartment;
use App\Models\Course as ModelsCourse;
use App\Models\Department;
use Livewire\Component;

class Course extends Component
{
    public $college_id, $college_course_details, $departments, $courses;
    public $department_id, $course_id;
    public function mount($id)
    {
        $this->college_id = $id;
        $this->college_course_details = CollegeCourseDepartment::where('college_id', $id)->first();
        $this->departments = Department::all();
        $this->courses = ModelsCourse::all();
        $this->department_id = $this->college_course_details?->department_id;
        $this->course_id = $this->college_course_details?->course_id;
    }

    public function render()
    {
        return view('livewire.college.edit.course');
    }

    public function update_course_department()
    {
        $college_course_details = CollegeCourseDepartment::where('college_id', $this->college_id)->first();
        $college_course_details->department_id = $this->department_id;
        $college_course_details->course_id = $this->course_id;
        $college_course_details->update($college_course_details->toArray());
        flash('Course department updated successfully!');
        return redirect()->back();
    }
}
