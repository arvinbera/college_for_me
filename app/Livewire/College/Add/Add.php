<?php

namespace App\Livewire\College\Add;

use App\Models\College;
use Illuminate\Support\Facades\Session;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Str;

class Add extends Component
{
    public $college_name, $logo, $college_about, $organization_type;
    public $selectedTab = 'tab1';
    use WithFileUploads;

    public function selectTab($tab)
    {
        $this->selectedTab = $tab;
    }
    public function render()
    {
        return view('livewire.college.add.add');
    }

    public function submit_college_info()
    {
        $entity = new College();
        $entity->name = $this->college_name;
        $entity->slug = Str::slug($this->college_name);
        $entity->college_about = $this->college_about;
        $entity->institute_type = $this->organization_type;
        // $entity->college_logo = $this->logo->store('logo');
        $x = $entity->addMedia($this->logo)->toMediaCollection('gallery');
        $entity->save();
        flash('College info saved successfully!');
        Session::put('college_id', $entity->id);
        return redirect()->route('college.address');
    }
}
