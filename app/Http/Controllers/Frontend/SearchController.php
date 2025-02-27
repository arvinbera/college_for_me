<?php

namespace App\Http\Controllers\Frontend;

use App\Core\FileHelper;
use App\Http\Controllers\Controller;
use App\Models\College;
use Illuminate\Http\Request;
use Spatie\FlareClient\Api;
use App\Http\Controllers\ApiResponseCntroller;

class SearchController extends Controller
{
    public function header_search($key)
    {
        $college_name = $key;
        if (strlen($college_name) < 3) {
            return response()->json([
                'is_success' => false,
                'message' => 'College Name is too short, write at least 3 charecters',
            ]);
        } else {
            $college_verified_list = College::with('college_address')->where('name', 'like', '%' . $college_name . '%')
                ->where('is_verify', 1)
                ->get();
            $college_not_verified_list = College::with('college_address')->where('name', 'like', '%' . $college_name . '%')
                ->where('is_verify', 0)
                // ->take(10)
                ->get();
            $college_list = $college_verified_list->concat($college_not_verified_list);
            return ApiResponseCntroller::response_success(data: $college_list, message: 'College List', status: 200);
            // return response()->json([
            //     'is_success' => true,
            //     'data' => $college_list,
            //     'message' => 'College List',
            // ]);
        }
    }

    public function college_filter_search(Request $request)
    {
        $college_search_list = College::with('college_address', 'college_course_department');
        $course_id = $request->course_id;
        $state_id = $request->state_id;
        $district_id = $request->district_id;
        $city = $request->city;
        // return $request->institute_type;
        if ($request->institute_type) {
            $college_search_list->where('institute_type', $request->institute_type);
        }
        if ($course_id) {
            $college_search_list->whereHas('college_course_department', function ($q) use ($course_id) {
                $q->where('course_id', $course_id);
            });
        }
        if ($state_id) {
            $college_search_list->whereHas('college_address', function ($q) use ($state_id) {
                $q->where('state_id', $state_id);
            });
        }
        if ($district_id) {
            $college_search_list->whereHas('college_address', function ($q) use ($district_id) {
                $q->where('district_id', $district_id);
            });
        }
        if ($city) {
            $college_search_list->whereHas('college_address', function ($q) use ($city) {
                $q->where('city', $city);
            });
        }
        $college_search_list = $college_search_list->get();
        foreach ($college_search_list as $college) {
            $college->logo_image_path =  asset('/storage/app/' . $college->college_logo);
        }

        return ApiResponseCntroller::response_success(data: $college_search_list, message: 'College List', status: 200);
 
    }
}
