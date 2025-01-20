<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class CollegeImage extends Model implements HasMedia
{
    use InteractsWithMedia;
    protected $fillable = ['college_id', 'college_image'];

    public function registerMediaCollections(): void
    {
        $this->addMediaCollection('college_gallery')->useDisk('storage/gallery');
    }
}
