<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Bill extends Model
{

    protected $fillable = [
    'college_id',
    'gst_type',
    'bill_type',
    'course_duration',
    'location',
    'email',
    'gst_number_college',
    'receipt_date',
    'phone',
    'payment_mode',
    'created_at',
    'updated_at',
    'total',
    'recived_amount',
    'due_amount',
    'cgst',
    'sgst',
    'igst',
    'transaction_id',
    'bank_name',
    'check_number'
    ];
    
    public function college()
    {
        return $this->belongsTo(College::class, 'college_id');
    }
}
