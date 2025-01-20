<?php

namespace App\Livewire\College\Edit\Faculty;

use App\Models\CollegeFaculty;
use App\Models\Department;
use Livewire\Component;

class FacultyEdit extends Component
{
    public $faculty_details, $departments, $faculty_name, $department_id, $designation, $faculty_details_id;

    public function mount($id)
    {
        $this->faculty_details = CollegeFaculty::where('id', $id)->first();
        $this->departments = Department::all();
        $this->faculty_name = $this->faculty_details->faculty_name;
        $this->department_id = $this->faculty_details->department_id;
        $this->designation = $this->faculty_details->faculty_designation;
        $this->faculty_details_id = $this->faculty_details->id;
    }

    public function update_faculty_info()
    {
        $faculty = CollegeFaculty::where('id', $this->faculty_details_id)->first();
        $faculty->faculty_name = $this->faculty_name;
        $faculty->department_id = $this->department_id;
        $faculty->faculty_designation = $this->designation;
        $faculty->update($faculty->toArray());
        flash('Faculty details updated successfully!');
    }
    public function render()
    {
        return view('livewire.college.edit.faculty.faculty-edit');
    }
}
