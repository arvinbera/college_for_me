<?php

namespace App\Http\Controllers\apicontroller;

use App\Http\Controllers\ApiResponseCntroller;
use App\Http\Controllers\Controller;
use App\Models\CollegeFaculty;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class FacultyController extends Controller
{
    public function index()
    {
        $college_faculty = CollegeFaculty::all();
        if ($college_faculty->count() > 0) {

            return ApiResponseCntroller::response_success(data: $college_faculty, message: 'Records fetch successfully', status: 200);
        } else {


            return  ApiResponseCntroller::response_error(message: 'No such records found', status: 404);
        }
    }

    public function show($id)
    {
        $college_faculty = CollegeFaculty::find($id);

        if ($college_faculty) {


            return ApiResponseCntroller::response_success(data: $college_faculty, message: 'Records fetch successfully', status: 200);

            // return response()->json([
            //     'success'=> true,
            //     'Data'=> $college_faculty,
            //     'statusCode'=> 200,
            //     'message'=> "Records fetch successfully",
            // ], 200);
        } else {

            return ApiResponseCntroller::response_error(message: 'No such records founds', status: 404);
            // return response()->json([
            //     'success' => false,
            //     'error'=>[
            //       'message'=> "No such records found !",
            //     ],
            //      'statusCode' => 404,    
            // ], 404);

        }
    }

    public function update(Request $request, int $id)
    {
        $validator = Validator::make($request->all(), [
            'college_id' => 'required',
            'department_id' => 'required',
            'faculty_name' => 'required|string|max:191',
            'faculty_designation' => 'required|string|max:191'
        ]);
        if ($validator->fails()) {

            return ApiResponseCntroller::response_error(message: 'Validation Error', errors: $validator->errors(), status: 404);
            // return response()->json([
            //     'success' => false,
            //     'error' => $validator->messages(),
            // ], 404);
        } else {
            $college_faculty = CollegeFaculty::find($id);

            if ($college_faculty) {
                $college_faculty->update([
                    'college_id' => $request->college_id,
                    'department_id' => $request->department_id,
                    'faculty_name' => $request->faculty_name,
                    'faculty_designation' => $request->faculty_designation,
                ]);
                return ApiResponseCntroller::response_success(data: $college_faculty, message: 'Data updated successfully !', status: 202);
                // return response()->json([
                //     'success' => true,
                //     'message' => 'Data updated successfully !',
                //     'statusCode' => 202
                // ], 202);
            } else {
                return ApiResponseCntroller::response_error(message: 'No such records founds', status: 404);
                // return response()->json([
                //     'success' => false,
                //     'error' => [
                //         'message' => 'No such records founds',
                //     ],
                //     'statusCode' => 404,
                // ], 404);
            }
        }
    }
}
