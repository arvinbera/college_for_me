<?php

namespace App\Http\Controllers\apicontroller;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use App\Models\Placement;
use Illuminate\Http\Request;

class PlacementController extends Controller
{
    public function edit($id)
    {
        $college_placement = Placement::find($id);
        if ($college_placement){
            return response()->json([
                'success'=> true,
                'data'=> $college_placement,
                'statusCode'=> 200,
                'message'=> 'Records fetch successfully',
            ], 200);
        } else {
            return response()->json([
                'success' => false,
                'error'=>[
                  'message'=> 'NO such records found !',
                ],
                'statusCode' => 404,
            ], 404);
        }
    }

    public function update(Request $request, int $id)
    {
        $validator = Validator::make($request->all(),[
            'high_package' => 'required',
            'avg_package' => 'required',
            'placement_description' => 'required'
        ]);
        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'errors'=> $validator->messages(),
            ], 404);
        } else {
            $college_placement = Placement::find($id);

            if ($college_placement)
            {
                $college_placement->update([
                    'high_package' => $request->high_package,
                    'avg_package' => $request->avg_package,
                    'placement_description' => $request->placement_description,
                ]);
                return response()->json([
                    'success'=> true,
                    'message'=> 'Data updated successfully !',
                    'statusCode' => 202
                ], 202);
            } else {
                return response()->json([
                    'success'=> false,
                    'error'=>[
                      'message'=> 'No such record found'
                    ],
                    'statusCode' => 404,
                ], 404);
            }
        }
    }
}
