<?php

namespace App\Livewire\College\Add;

use App\Models\CollegeFaculty;
use App\Models\Department;
use Illuminate\Support\Facades\Session;
use Livewire\Component;

class Faculty extends Component
{
    public $departments, $designation, $department_id, $faculty_name, $faculty_designation, $college_id;

    public function mount()
    {
        $this->departments = Department::all();
    }
    public function render()
    {
        return view('livewire.college.add.faculty');
    }

    public function submit_faculty_info()
    {
        $this->college_id = Session::get('college_id');
        $entity = new CollegeFaculty();
        $entity->college_id = $this->college_id;
        $entity->department_id = $this->department_id;
        $entity->faculty_name = $this->faculty_name;
        $entity->faculty_designation = $this->designation;
        $entity->save();
        flash('Faculty info saved successfully!');
        $this->resetInputFields();
    }

    private function resetInputFields()
    {

        $this->faculty_name = '';
        $this->department_id = '';
        $this->designation = '';
    }
}
