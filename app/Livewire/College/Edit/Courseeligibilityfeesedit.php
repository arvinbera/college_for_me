<?php

namespace App\Livewire\College\Edit;

use App\Models\CollegeCourseDepartment;
use App\Models\CollegeCourseFeeEligibility;
use App\Models\Course;
use App\Models\Department;
use Livewire\Component;

class Courseeligibilityfeesedit extends Component
{
    public $courses, $departments, $course_fees_id, $college_id, $course_department, $course_id, $selectedDepartment, $selectedCourse;
    public $eligibility, $fees, $course_fees;
    public function mount($course_fees_id, $college_id)
    {
        $this->courses = Course::all();
        $this->departments = Department::all();
        $this->course_fees_id = $course_fees_id;
        $this->college_id = $college_id;
        $this->course_department = CollegeCourseDepartment::where('id', $course_fees_id)->first();
        $this->selectedDepartment = $this->course_department->department_id;
        $this->selectedCourse = $this->course_department->course_id;
        $this->eligibility = $this->course_department->eligibility;
        $this->course_fees = CollegeCourseFeeEligibility::where('college_course_fee_id', $course_fees_id)->first();
        $this->fees = $this->course_fees?->fees;
    }
    public function render()
    {
        return view('livewire.college.edit.courseeligibilityfeesedit');
    }

    public function update_course_department_eligibility_fees()
    {
        $college_course_details = CollegeCourseDepartment::where('id', $this->course_fees_id)->first();
        $college_course_details->eligibility = $this->eligibility;
        $college_course_details->course_id = $this->selectedCourse;
        $college_course_details->department_id = $this->selectedDepartment;
        $college_course_details->update($college_course_details->toArray());
        $course_fees_details = CollegeCourseFeeEligibility::where('college_course_fee_id', $this->course_fees_id)->first();
        $course_fees_details->fees = $this->fees;

        $course_fees_details->update($course_fees_details->toArray());
        flash('updated successfully');
        return redirect()->back();
    }
}
