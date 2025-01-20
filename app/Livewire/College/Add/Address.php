<?php

namespace App\Livewire\College\Add;

use App\Models\CollegeContact;
use App\Models\District;
use App\Models\State;
use Illuminate\Support\Facades\Session;
use Livewire\Component;

class Address extends Component
{
    public $states, $districts, $pincode, $email, $college_id;
    public $college_address, $selectedDistrict, $city;
    public $selectedState = NULL;
    public function render()
    {
        return view('livewire.college.add.address');
    }

    public function mount()
    {
        $this->states = State::all();
        $this->districts = collect();
        $this->college_id = Session::get('college_id');
    }

    public function updatedSelectedState($state)
    {

        if (!is_null($state)) {

            $this->districts = District::where('state_id', $state)->get();
        }
    }

    private function resetInputFields()
    {

        $this->college_address = '';
        $this->pincode = '';
        $this->selectedState = '';
        $this->selectedDistrict = '';
        $this->pincode = '';
        $this->city = '';
        $this->email = '';
    }
    public function submit_address()
    {
        $college_id = Session::get('college_id');
        $entity = new CollegeContact();
        $entity->college_id = $college_id;
        $entity->college_address = $this->college_address;
        $entity->pincode = $this->pincode;
        $entity->state_id = $this->selectedState;
        $entity->district_id = $this->selectedDistrict;
        $entity->city = $this->city;
        $entity->email = $this->email;
        // dd($entity);
        $entity->save();
        flash('College info saved successfully!');
        $this->resetInputFields();
        // return redirect()->route('college.add');
    }
}
