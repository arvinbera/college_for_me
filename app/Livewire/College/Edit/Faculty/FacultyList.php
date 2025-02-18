<?php

namespace App\Livewire\College\Edit\Faculty;

use App\Models\CollegeFaculty;
use Livewire\Component;

class FacultyList extends Component
{
    public $college_faculties, $college_id;
    public function mount($id)
    {
        $this->college_faculties = CollegeFaculty::where('college_id', $id)->get();
        $this->college_id = $id;
    }
    public function render()
    {
        return view('livewire.college.edit.faculty.faculty-list');
    }
}
