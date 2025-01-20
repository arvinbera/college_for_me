<?php

namespace App\Livewire\College\Add;

use App\Models\CollegeImage;
use Illuminate\Support\Facades\Session;
use Livewire\Component;
use Livewire\WithFileUploads;

class Gallery extends Component
{
    public $college_id, $pic, $images;
    use WithFileUploads;
    public function render()
    {
        return view('livewire.college.add.gallery');
    }

    public function submit_college_pics()
    {
        $this->college_id = Session::get('college_id');
        foreach ($this->images as $image) {
            $entity = new CollegeImage();
            $entity->college_id = $this->college_id;
            $entity->college_image = $image;
            $entity->college_image = $image->store('gallery');
            $entity->save();
        }
        flash('Gallery image uploaded successfully!');
    }
}
