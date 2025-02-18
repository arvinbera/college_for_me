<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CounselorLead extends Model
{
    public function lead()
    {
        return $this->belongsTo(AllLead::class, 'lead_id', 'id');
    }

    public function counselor()
    {
        return $this->belongsTo(User::class, 'counselor_id', 'id');
    }
}
