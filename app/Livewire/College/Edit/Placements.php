<?php

namespace App\Livewire\College\Edit;

use Livewire\Component;
use App\Models\Placement;

class Placements extends Component
{
    public $placement, $high_package, $avg_package, $placement_id, $placement_description;

    public function mount($id)
    {
        $this->placement = Placement::where('id', $id)->first();
        $this->high_package = $this->placement->high_package;
        $this->avg_package = $this->placement->avg_package;
        $this->placement_id = $this->placement->id;
    }

    public function update_placement_info()
    {
        $place = Placement::where('id', $this->placement_id)->first();
        $place->high_package = $this->high_package;
        $place->avg_package = $this->avg_package;
        $place->placement_description = $this->placement_description;
        $place->update($place->toArray());
        flash('Placement updated successfully!');
    }

    public function render()
    {
        return view('livewire.college.edit.placements');
    }
}
