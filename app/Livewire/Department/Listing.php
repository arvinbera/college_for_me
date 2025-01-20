<?php

namespace App\Livewire\Department;

use App\Models\Department;
use Livewire\Component;
use Livewire\WithPagination;

class Listing extends Component
{
    // public $departments;
    use WithPagination;
    protected string $paginationTheme = 'bootstrap';
    public function render()
    {
        // $this->departments = Department::paginate(4);
        // return view('livewire.department.listing');
        return view('livewire.department.listing', ['departments' => Department::paginate(4)]);
    }
}
