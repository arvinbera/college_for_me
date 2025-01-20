<?php

namespace App\Livewire\College\Edit;

use App\Models\College;
use Livewire\Component;
use Illuminate\Support\Str;
use Livewire\WithFileUploads;

class Info extends Component
{
    use WithFileUploads;
    public $college_details, $college_id, $college_name, $logo, $college_about, $organization_type;

    public function mount($id)
    {
        $this->college_details = College::where('id', $id)->first();
        $this->college_id = $id;
        $this->college_name = $this->college_details->name;
        $this->college_about = $this->college_details->college_about;
        $this->organization_type = $this->college_details->institute_type;
        $this->logo = $this->college_details->logo;
    }
    public function render()
    {
        return view('livewire.college.edit.info');
    }

    public function update_college_info()
    {
        $college_details = College::where('id', $this->college_id)->first();
        $college_details->name = $this->college_name;
        $college_details->slug = Str::slug($this->college_name);
        $college_details->college_about = $this->college_about;
        $college_details->institute_type = $this->organization_type;
        if ($this->logo) {
            $college_details->college_logo = $this->logo->store('logo');
        }
        $college_details->update($college_details->toArray());
        flash('College info updated successfully!');
        return redirect()->back();
    }
}
