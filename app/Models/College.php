<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class College extends Model
{
    protected $fillable = ["name", "slug", "college_about", "institute_type", "college_logo"];
}
