<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Leadfollowup extends Model
{
    public function lead()
    {
        return $this->belongsTo(AllLead::class, 'lead_id', 'id');
    }
}
