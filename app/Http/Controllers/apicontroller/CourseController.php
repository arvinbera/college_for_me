<?php

namespace App\Http\Controllers\apicontroller;

use App\Http\Controllers\Controller;
use App\Models\Course;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function index()
    {
        $college_course = Course::all();
        if ($college_course->count() > 0) {
            $data = [
                'success' => true,
                'college_faculty' => $college_course,
                'statusCode' => 200,
                'message' => 'Records fetch successfully',
            ];
            return response()->json($data, 200);
        } else {
            $data = [
                'success' => false,
                'error' => [
                    'message' => 'No such records found',
                ],
                'statusCode' => 404,
            ];
            return response()->json($data, 404);
        }
    }

    public function show($id)
    {
        $college_course = Course::find($id);

        if ($college_course) {
            return response()->json([
                'success' => true,
                'data' => $college_course,
                'statusCode' => 200,
                'message' => 'Records fetch successfully',
            ], 200);
        } else {
            return response()->json([
                'success' => false,
                'error' => [
                    'message' => 'NO such records found !',
                ],
                'statusCode' => 404,
            ], 404);
        }
    }

    public function update(Request $request, int $id)
    {
        $validator = Validator::make($request->all(), [
            'course_name' => 'required',
            'course_duration' => 'required',
        ]);
        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'error' => $validator->messages(),
            ], 404);
        } else {
            $college_course = Course::find($id);

            if ($college_course) {
                $college_course->update([
                    'course_name' => $request->course_name,
                    'course_slug' => $request->course_name,
                    'course_duration' => $request->course_duration,
                ]);
                return response()->json([
                    'success' => true,
                    'message' => 'Data updated successfully !',
                    'statusCode' => 202
                ], 202);
            } else {
                return response()->json([
                    'success' => false,
                    'error' => [
                        'message' => 'No such record found'
                    ],
                    'statusCode' => 404,
                ], 404);
            }
        }
    }
}
