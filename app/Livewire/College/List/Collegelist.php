<?php

namespace App\Livewire\College\List;

use App\Models\College;
use Livewire\Component;
use Livewire\WithPagination;

class Collegelist extends Component
{
    // public $colleges;
    use WithPagination;
    protected string $paginationTheme = 'bootstrap';
    public function render()
    {
        return view('livewire.college.list.collegelist', ['colleges' => College::paginate(2)]);
    }
}
