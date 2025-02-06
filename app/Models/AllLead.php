<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AllLead extends Model
{
    protected $fillable = ["name", "location", "email", "phone", "academic_year", "lead_source", "status"];

    public function counselor()
    {
        return $this->hasMany(CounselorLead::class, 'lead_id', 'id')->where('is_active', 1);
    }
}
