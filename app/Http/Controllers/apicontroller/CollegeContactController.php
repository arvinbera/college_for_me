<?php

namespace App\Http\Controllers\apicontroller;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use App\Models\CollegeContact;
use Illuminate\Http\Request;

class CollegeContactController extends Controller
{
    public function edit($id)
    {
        $college_contact = CollegeContact::find($id);
        if ($college_contact)
        {
            return response()->json([
                'success' => true,
                'data' => $college_contact,
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

    public function update(Request $request,int $id)
    {
        $validator = Validator::make($request->all(),[
            'college_address'=> 'required|string|max:191',
            'pincode' => 'required',
            'college_id' => 'required',
            'state_id' => 'required',
            'district_id' => 'required',
            'city'=> 'required',
            'email'=> 'required'
        ]);
        if ($validator->fails()){
            return response()->json([
                'success'=> false,
                'error'=> $validator->messages(),
            ], 404);
        } else {
            $college_contact = CollegeContact::find($id);

            if($college_contact){
                $college_contact->update([
                    'college_address'=> $request->college_address,
                    'pincode' => $request->pincode,
                    'college_id'=> $request->college_id,
                    'state_id' => $request->state_id,
                    'district_id' => $request->district_id,
                    'city' => $request->city,
                    'email' => $request->email,
                ]);
                return response()->json([
                    'success' => true,
                    'message'=> "Data updated successfully",
                    'statusCode' => 202
                ], 202);
            } else {
                return response()->json([
                    'success' => false,
                    'error'=>[
                      'message'=> 'No such record found'
                    ],
                    'statusCode' => 404,
                ], 404);
            }
        }
    }
}
