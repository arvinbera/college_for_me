<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Placement extends Model
{
    protected $fillable = [
        'id',
        'high_package',
        'avg_package',
        'created_at',
        'updated_at',
        'placement_description',
        'college_id'
    ];
}
