<?php

namespace App\Livewire\College\Edit;

use App\Models\College;
use App\Models\CollegeContact;
use App\Models\District;
use App\Models\State;
use Livewire\Component;

class Address extends Component
{
    public $college_contact_details, $states, $districts, $college_id;
    public $college_address, $pincode, $selectedDistrict, $city, $email;
    public $selectedState;
    public function mount($id)
    {
        $this->college_contact_details = CollegeContact::where('college_id', $id)->first();
        $this->states = State::all();
        $this->college_id = $id;
        $this->selectedState = $this->college_contact_details->state_id ?? "";
        $this->districts = District::where('state_id', $this->selectedState)->get();
        $this->college_address = $this->college_contact_details->college_address ?? "";
        $this->pincode = $this->college_contact_details->pincode ?? "";
        $this->selectedDistrict = $this->college_contact_details->district_id ?? "";
        $this->city = $this->college_contact_details->city ?? "";
        $this->email = $this->college_contact_details->email ?? "";
    }
    public function render()
    {
        return view('livewire.college.edit.address');
    }

    public function updatedSelectedState($state)
    {

        if (!is_null($state)) {

            $this->districts = District::where('state_id', $state)->get();
        }
    }

    public function update_address()
    {
        $college_address_details = CollegeContact::where('college_id', $this->college_id)->first();
        if (empty($college_address_details)) {
            $entity = new CollegeContact();
            $entity->college_id = $this->college_id;
            $entity->save();
            $college_address_details = CollegeContact::where('college_id', $this->college_id)->first();
            $college_address_details->college_address = $this->college_address ?? "";
            $college_address_details->state_id = $this->selectedState ?? "";
            $college_address_details->district_id = $this->selectedDistrict ?? "";
            $college_address_details->pincode = $this->pincode ?? "";
            $college_address_details->city = $this->city ?? "";
            $college_address_details->email = $this->email ?? "";
            $college_address_details->update($college_address_details->toArray());
            flash('College address updated successfully!');
            return redirect()->back();
        } else {
            $college_address_details->college_address = $this->college_address ?? "";
            $college_address_details->state_id = $this->selectedState ?? "";
            $college_address_details->district_id = $this->selectedDistrict ?? "";
            $college_address_details->pincode = $this->pincode ?? "";
            $college_address_details->city = $this->city ?? "";
            $college_address_details->email = $this->email ?? "";
            $college_address_details->update($college_address_details->toArray());
            flash('College address updated successfully!');
            return redirect()->back();
        }
    }
}
