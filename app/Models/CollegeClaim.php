<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CollegeClaim extends Model
{
    public function college()
    {
        return $this->belongsTo(College::class, 'college_id', 'id');
    }
}
