<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class College extends Model
{
    protected $fillable = ["name", "slug", "college_about", "institute_type", "college_logo", "is_verify"];

    public function college_address()
    {
        return $this->hasMany(CollegeContact::class, 'college_id', 'id');
    }

    public function college_course_department()
    {
        return $this->hasMany(CollegeCourseDepartment::class, 'college_id', 'id');
    }
}
