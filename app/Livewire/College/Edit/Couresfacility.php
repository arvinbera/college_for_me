<?php

namespace App\Livewire\College\Edit;

use App\Models\CollegeCourseDepartment;
use Livewire\Component;

class Couresfacility extends Component
{
    public $course_eligibilities_fees;

    public function mount($id)
    {
        $this->course_eligibilities_fees = CollegeCourseDepartment::where('college_id', $id)->get();
    }
    public function render()
    {
        return view('livewire.college.edit.couresfacility');
    }
}
