<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\ApiResponseCntroller;
use App\Http\Controllers\Controller;
use App\Models\College;
use App\Models\CollegeContact;
use Illuminate\Http\Request;

class FrontCollegeApiController extends Controller
{
    public function college_info_details($college_id)
    {
        $college_details = College::where('id', $college_id)->first();
        return ApiResponseCntroller::response_success(data: $college_details, message: 'College details fetched successfully', status: 200);
    }

    public function college_address_details($college_id)
    {
        $college_address_details = CollegeContact::where('college_id', $college_id)->first();
        return ApiResponseCntroller::response_success(data: $college_address_details, message: 'College address details fetched successfully', status: 200);
    }
}
