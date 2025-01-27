<?php

namespace App\Livewire\College\Add;

use App\Models\College;
use App\Models\Placement;
use Livewire\Component;
use Illuminate\Support\Facades\Session;


class Placements extends Component
{
    public $high_package, $avg_package, $placement_description, $colleges, $college_id,$selectedOption;

    public function mount()
    {
        $this->colleges = College::all();
    }

    public function updatedSelectedOption($id)
    {
        // dd($id) ;
        if (isset($id)) {
           return redirect()->route('college.placement.edit', $id); 
        }else{
            return redirect()->back();
        }
    }

    public function render()
    {
        return view('livewire.college.add.placement');
    }

    public function submit_placement()
    {
        $this->college_id = Session::get('college_id');
        $entity = new Placement();
        $entity->college_id = $this->college_id;
        $entity->high_package = $this->high_package;
        $entity->avg_package = $this->avg_package;
        $entity->placement_description = $this->placement_description;
        $entity->save();
        // dd($entity);
        flash('Placement Info save successfully');
        $this->resetinputfield();
        // return redirect()->back();
    }

    private function resetinputfield()
    {
        $this->high_package = '';
        $this->avg_package = '';
    }
}
