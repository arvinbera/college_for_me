<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CollegeCourseDepartment extends Model
{
    protected $fillable = ["department_id", "course_id", "eligibility"];
    public function college()
    {
        return $this->belongsTo(College::class, 'college_id', 'id');
    }

    public function course()
    {
        return $this->belongsTo(Course::class, 'course_id', 'id');
    }

    public function department()
    {
        return $this->belongsTo(Department::class, 'department_id', 'id');
    }

    public function fees()
    {
        return $this->hasOne(CollegeCourseFeeEligibility::class, 'college_course_fee_id', 'id');
    }
}
