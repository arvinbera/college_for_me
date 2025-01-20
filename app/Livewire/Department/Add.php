<?php

namespace App\Livewire\Department;

use App\Models\Department;
use Livewire\Component;
use Illuminate\Support\Str;

class Add extends Component
{
    public $department_name;
    public function render()
    {
        return view('livewire.department.add');
    }

    public function submit_department()
    {
        $this->validate([
            'department_name' => 'required',
        ], [
            'department_name.required' => 'Course name is required.',
        ]);
        $entity = new Department();
        $entity->department_name = $this->department_name;
        $entity->department_slug =  Str::slug($this->department_name);
        $entity->save();

        flash('Department saved successfully!');
        $this->reset('department_name');
    }
}
