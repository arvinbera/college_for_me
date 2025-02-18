<?php

namespace App\Livewire\College\Edit\Course;

use App\Models\CollegeCourseDepartment;
use App\Models\CollegeCourseFeeEligibility;
use App\Models\Course;

use App\Models\Department;
use Livewire\Component;

class CourseNew extends Component
{
    public $courses, $departments, $college_id, $course_id, $department_id, $eligibility, $fees;

    public function mount($id)
    {
        $this->courses = Course::all();
        $this->departments = Department::all();
        $this->college_id = $id;
        $this->eligibility = null;
    }

    public function add_new_course_eligibility_fees()
    {
        $course_department_details = CollegeCourseDepartment::where('college_id', $this->college_id)
            ->where('course_id', $this->course_id)
            ->where('department_id', $this->department_id)
            ->first();
        if ($course_department_details) {
            flash('Course department already exists!', 'warning');
            return redirect()->back();
        }
        $entity = new CollegeCourseDepartment();
        $entity->college_id = $this->college_id;
        $entity->course_id = $this->course_id;
        $entity->department_id = $this->department_id;
        $entity->eligibility = $this->eligibility;
        $entity->save();
        $fees = new CollegeCourseFeeEligibility();
        $fees->college_course_fee_id = $entity->id;
        $fees->fees = $this->fees;
        $fees->save();
        flash('Course department added successfully!');
        return redirect()->back();
    }
    public function render()
    {
        return view('livewire.college.edit.course.course_new');
    }
}
