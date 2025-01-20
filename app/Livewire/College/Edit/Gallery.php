<?php

namespace App\Livewire\College\Edit;

use App\Models\CollegeImage;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;

class Gallery extends Component
{
    use WithFileUploads;
    protected $listeners = ['refreshComponent' => '$refresh'];
    public $college_id, $college_gallery_pics, $college_images, $image_details, $images;
    public function mount($id)
    {
        $this->college_id = $id;
        $this->college_gallery_pics = CollegeImage::where('college_id', $id)->get();
    }

    public function deleteImage($id)
    {
        CollegeImage::where('id', $id)->delete();
        $this->college_gallery_pics = CollegeImage::where('college_id', $id)->get();
        $this->dispatchBrowserEvent('refresh-page');
    }

    public function render()
    {
        return view('livewire.college.edit.gallery');
    }

    public function submit_new_pic()
    {
        foreach ($this->images as $image) {
            $entity = new CollegeImage();
            $entity->college_id = $this->college_id;
            $entity->college_image = $image;
            $entity->college_image = $image->store('gallery');
            $entity->save();
        }
        flash('Gallery new image uploaded successfully!');
    }
}
