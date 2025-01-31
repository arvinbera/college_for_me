<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AllLead extends Model
{
    protected $fillable = ["name", "location", "email", "phone", "academic_year", "lead_source"];
}
