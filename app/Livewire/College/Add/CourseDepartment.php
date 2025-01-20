<?php

namespace App\Livewire\College\Add;

use App\Models\CollegeCourseDepartment;
use App\Models\Course;
use App\Models\Department;
use Illuminate\Support\Facades\Session;
use Livewire\Component;

class CourseDepartment extends Component
{
    public $courses, $departments, $department_id, $course_id, $college_id;
    public function mount()
    {
        $this->departments = Department::all();
        $this->courses = Course::all();
    }
    public function render()
    {
        return view('livewire.college.add.course-department');
    }

    public function submit_course_department()
    {
        $entity = new CollegeCourseDepartment();
        $entity->department_id = $this->department_id;
        $entity->course_id = $this->course_id;
        $entity->college_id = Session::get('college_id');
        $entity->save();
        flash('Course department added successfully!');
        $this->resetInputFields();
    }

    private function resetInputFields()
    {

        $this->department_id = '';
        $this->course_id = '';
    }
}
