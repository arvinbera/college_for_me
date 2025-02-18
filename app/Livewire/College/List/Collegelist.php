<?php

namespace App\Livewire\College\List;

use App\Models\College;
use Livewire\Component;
use Livewire\WithPagination;

class Collegelist extends Component
{
    public $college_details, $college_key = '';
    use WithPagination;
    protected string $paginationTheme = 'bootstrap';

    public function add_verify($id)
    {
        $this->college_details = College::where('id', $id)->update(['is_verify' => true]);
        flash('Bluetick added successfully');
    }

    public function updatingCollegeKey()
    {
        $this->resetPage(); // Reset pagination when search input changes
    }
    public function remove_verify($id)
    {
        $this->college_details = College::where('id', $id)->update(['is_verify' => false]);
        flash('Bluetick removed successfully', 'warning');
    }
    public function render()
    {
        $colleges = College::where('name', 'like', '%' . $this->college_key . '%')
            ->paginate(2);

        return view('livewire.college.list.collegelist', compact('colleges'));
    }
}
