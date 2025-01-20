<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CollegeContact extends Model
{
    protected $fillable = ["state_id", "district_id", "city", "pincode", "email", "phone", "college_address"];
}
