<?php

namespace App\Http\Controllers\apicontroller;

use App\Http\Controllers\ApiResponseCntroller;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Models\College;

class CollegeinfoController extends Controller
{
    public function edit($id)
    {
        $college_info = College::find($id);
        if ($college_info) {

            return ApiResponseCntroller::response_success(data: $college_info, message: 'College info fetched successfully', status: 200);
        } else {

            return ApiResponseCntroller::response_error(message: 'No such records founds', status: 404);
        }
    }

    public function update(Request $request, int $id)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:191',
            'college_about' => 'required|string|max:191',
            'institute_type' => 'required|string|max:191',
        ]);
        if ($validator->fails()) {


            return ApiResponseCntroller::response_error(message: 'Validation Error', errors: $validator->errors(), status: 404);
            // return response()->json([
            //     'is_success' => false,
            //     'errors' => $validator->messages()
            // ], 404);
        } else {
            $college_info = College::find($id);

            if ($college_info) {
                $college_info->update([
                    'name' => $request->name,
                    'slug' => $request->name,
                    'college_about' => $request->college_about,
                    'institute_type' => $request->institute_type,
                ]);

                return ApiResponseCntroller::response_success(data: $college_info, message: 'Data updated successfully !', status: 202);
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
