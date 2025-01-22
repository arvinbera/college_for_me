<?php

namespace App\Livewire\College\List;

use App\Models\College;
use Livewire\Component;
use Livewire\WithPagination;

class Collegelist extends Component
{
    public $college_details;
    use WithPagination;
    protected string $paginationTheme = 'bootstrap';

    public function add_verify($id)
    {
        $this->college_details = College::where('id', $id)->update(['is_verify' => true]);
        flash('Bluetick added successfully');
    }
    public function remove_verify($id)
    {
        $this->college_details = College::where('id', $id)->update(['is_verify' => false]);
        flash('Bluetick removed successfully', 'warning');
    }
    public function render()
    {
        return view('livewire.college.list.collegelist', ['colleges' => College::paginate(2)]);
    }
}
