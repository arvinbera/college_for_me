<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\ApiResponseCntroller;
use App\Http\Controllers\Controller;
use App\Models\College;
use App\Models\CollegeContact;
use App\Models\CollegeCourseDepartment;
use App\Models\CollegeFaculty;
use App\Models\Placement;
use Illuminate\Http\Request;
use stdClass;

class FrontCollegeApiController extends Controller
{
    public function college_info_details($college_slug)
    {
        $college_details = College::where('slug', $college_slug)->first();
        if (!$college_details) {
            return ApiResponseCntroller::response_error(message: 'College not found', status: 404);
        }

        return ApiResponseCntroller::response_success(data: $college_details, message: 'College details fetched successfully', status: 200);
    }

    public function college_address_details($college_id)
    {
        $college_address_details = CollegeContact::where('college_id', $college_id)->first();
        if (!$college_address_details) {
            return ApiResponseCntroller::response_error(message: 'College address not found', status: 404);
        }
        return ApiResponseCntroller::response_success(data: $college_address_details, message: 'College address details fetched successfully', status: 200);
    }

    public function course_fees_departmen($college_id)
    {
        $college_course_department_details = CollegeCourseDepartment::with('college', 'course', 'department', 'fees')->where('college_id', $college_id)->get();
        $college_details = College::where('id', $college_id)->first();
        $college_course_depatments = [];
        $college_course = [];
        $course_ids = [];

        foreach ($college_course_department_details as $college_course_department) {
            // return $college_course_department;
            if (in_array($college_course_department->course->id, $course_ids)) {
                continue;
            } else {
                $x = new stdClass();
                $x->course = $college_course_department->course;

                $departments = CollegeCourseDepartment::with('department', 'fees')->where('college_id', $college_id)->where('course_id', $x->course->id)->get();
                // foreach ($departments as $department) {

                //     $y = new stdClass();
                //     $y->department = $department->department->department_name;
                //     $y->course_id = $x->course->id;

                //     array_push($college_department_fees, $y);
                // }

                $x->department = $departments;
                // $x->fees = $college_course_department->fees;
                $course_id = $college_course_department->course->id;

                array_push($course_ids, $course_id);

                array_push($college_course, $x);
            }
        }
        $college_details->courses = $college_course;
        // $college_details->course_id = $course_ids;
        array_push($college_course_depatments, $college_details);

        return $college_course_depatments;
        if (!$college_course_department_details) {
            return ApiResponseCntroller::response_error(message: 'College course department not found', status: 404);
        }
        return ApiResponseCntroller::response_success(data: $college_course_department_details, message: 'College course department details fetched successfully', status: 200);
    }

    public function college_faculty_details($college_id)
    {
        $college_faculty_details = CollegeFaculty::with('department')->where('college_id', $college_id)->get();

        if (!$college_faculty_details) {
            return ApiResponseCntroller::response_error(message: 'College faculty not found', status: 404);
        }

        return ApiResponseCntroller::response_success(data: $college_faculty_details, message: 'College faculty details fetched successfully', status: 200);
    }

    public function college_placement_details($college_id)
    {
        $college_placement_details = Placement::where('college_id', $college_id)->get();
        if (!$college_placement_details) {
            return ApiResponseCntroller::response_error(message: 'College placement not found', status: 404);
        }
        return ApiResponseCntroller::response_success(data: $college_placement_details, message: "College placement details");
    }
}
