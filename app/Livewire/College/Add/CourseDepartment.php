<?php

namespace App\Livewire\College\Add;

use App\Models\College;
use App\Models\CollegeCourseDepartment;
use App\Models\CollegeCourseFeeEligibility;
use App\Models\Course;
use App\Models\Department;
use Illuminate\Support\Facades\Session;
use Livewire\Component;

class CourseDepartment extends Component
{
    public $courses, $departments, $department_id, $course_id, $college_id, $colleges, $selectedOption;
    public $eligibility, $fees;
    public function mount()
    {
        $this->departments = Department::all();
        $this->courses = Course::all();
        $this->colleges = College::all();
    }
    public function render()
    {
        return view('livewire.college.add.course-department');
    }

    public function updatedSelectedOption($id)
    {
        if (isset($id)) {

            return redirect()->route('college.course.edit', $id);
        } else {
            return redirect()->back();
        }
    }

    public function submit_course_department()
    {
        $entity = new CollegeCourseDepartment();
        $entity->department_id = $this->department_id;
        $entity->course_id = $this->course_id;
        $entity->college_id = Session::get('college_id');
        $entity->eligibility = $this->eligibility;
        $entity->save();
        $fees = new CollegeCourseFeeEligibility();
        $fees->college_course_fee_id = $entity->id;
        $fees->fees = $this->fees;
        $fees->save();
        flash('Course department added successfully!');
        $this->resetInputFields();
    }

    private function resetInputFields()
    {

        $this->department_id = '';
        $this->course_id = '';
        $this->eligibility = '';
        $this->fees = '';
    }
}
