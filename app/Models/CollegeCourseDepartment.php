<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CollegeCourseDepartment extends Model
{
    protected $fillable = ["department_id", "course_id"];
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
}
