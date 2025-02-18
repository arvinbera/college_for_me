<?php

namespace App\Livewire\College\Edit\Faculty;

use App\Models\CollegeFaculty;
use App\Models\Department;
use Livewire\Component;

class FacultyNew extends Component
{
    public $college_id, $departments, $faculty_name, $department_id, $designation;

    public function mount($id)
    {
        $this->college_id = $id;
        $this->departments = Department::all();
    }

    public function add_new_faculty()
    {
        $entity = new CollegeFaculty();
        $entity->faculty_name = $this->faculty_name;
        $entity->department_id = $this->department_id;
        $entity->faculty_designation = $this->designation;
        $entity->college_id = $this->college_id;
        $entity->save();
        flash('Faculty added successfully!');
        return redirect()->back();
    }
    public function render()
    {
        return view('livewire.college.edit.faculty.faculty-new');
    }
}
