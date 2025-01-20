<?php

namespace App\Livewire\Department;

use App\Models\Department;
use Livewire\Component;
use Illuminate\Support\Str;

class Edit extends Component
{
    public $department_details, $department_id, $department_name;

    public function mount($id)
    {
        $this->department_id = $id;
        $this->department_details = Department::where('id', $id)->first();
        $this->department_name = $this->department_details->department_name;
    }
    public function render()
    {
        return view('livewire.department.edit');
    }

    public function update_department()
    {
        $this->validate([
            'department_name' => 'required',
        ], [
            'department_name.required' => 'Department name is required.',
        ]);

        $department_details = Department::find($this->department_id);
        $department_details->update([
            'department_name' => $this->department_name,
            'department_slug' =>  Str::slug($this->department_name),
        ]);
        flash('Department updated successfully!');
    }
}
