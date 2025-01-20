<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CollegeFaculty extends Model
{
    protected $fillable = ["college_id", "department_id", "faculty_name", "faculty_designation"];
    public function college()
    {
        return $this->belongsTo(College::class, 'college_id', 'id');
    }

    public function department()
    {
        return $this->belongsTo(Department::class, 'department_id', 'id');
    }
}
