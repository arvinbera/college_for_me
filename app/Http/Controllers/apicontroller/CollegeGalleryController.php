<?php

namespace App\Http\Controllers\apicontroller;

use App\Http\Controllers\ApiResponseCntroller;
use App\Http\Controllers\Controller;
use App\Models\CollegeImage;
use Illuminate\Support\Facades\Validator;
use Illuminate\Auth\Events\Validated;
use Illuminate\Foundation\Console\ApiInstallCommand;
use Illuminate\Http\Request;

class CollegeGalleryController extends Controller
{
    public function show($id)
    {
        $college_gallery = CollegeImage::find($id);
        if ($college_gallery) {
            return ApiResponseCntroller::response_success(data: $college_gallery, message: 'Records fetch successfully', status: 200);
            // return response()->json([
            //     'success'=> true,
            //     'Data'=> $college_gallery,
            //     'statusCode'=> 200,
            //     'message'=> "Records fetch successfully",
            // ], 200);
        } else {
            return ApiResponseCntroller::response_error(message: 'NO such records found !', status: 404);
            // return response()->json([
            //     'success'=> false,
            //     'error'=>[
            //       'message'=> 'NO such records found !',
            //     ],
            //     'statusCode' => 404,
            // ], 404);
        }
    }

    public function update(Request $request, int $id)
    {
        $validator = Validator::make($request->all(), [
            'college_image' => 'required',
        ]);
        if ($validator->fails()) {
            return ApiResponseCntroller::response_error(message: 'Validation Error', errors: $validator->errors(), status: 404);
            // return response()->json([
            //     'success' => false,
            //     'error'=> $validator->messages(),
            // ], 404);
        } else {
            $college_gallery = CollegeImage::find($id);

            if ($college_gallery) {
                $college_gallery->update([
                    'college_image' => $request->college_image,
                ]);
                return ApiResponseCntroller::response_success(data: $college_gallery, message: 'Data updated successfully !', status: 202);
                // return response()->json([
                //     'success'=> true,
                //     'message'=> 'Data updated successfully !',
                //     'statusCode' => 202
                // ], 202);
            } else {
                return ApiResponseCntroller::response_error(message: 'No such records founds', status: 404);
                // return response()->json([
                //     'success'=> false,
                //     'error'=>[
                //       'message'=> 'No such record found'
                //     ],
                //     'statusCode' => 404,
                // ], 404);
            }
        }
    }
}
