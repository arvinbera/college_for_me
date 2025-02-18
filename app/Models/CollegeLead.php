<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CollegeLead extends Model
{
    public function college()
    {
        return $this->belongsTo(College::class, 'college_id', 'id');
    }

    public function lead()
    {
        return $this->belongsTo(AllLead::class, 'lead_id', 'id');
    }
}
