<?php

namespace App\Http\Controllers\apicontroller;

use App\Http\Controllers\Controller;
use App\Models\CollegeFaculty;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class FacultyController extends Controller
{
    public function index()
    {
        $college_faculty = CollegeFaculty::all();
        if ($college_faculty->count() > 0){
            $data = [
                'success'=> true,
                'college_faculty'=> $college_faculty,
                'statusCode' => 200,
                'message'=> 'Records fetch successfully',
            ];
            return response()->json($data, 200);
        } else {
            $data = [
                'success' => false,
                'error' => [
                    'message'=> 'No such records found',
                ],
                'statusCode' => 404,
            ];
            return response()->json($data, 404);
        }
    }

    public function edit($id)
    {
        $college_faculty = CollegeFaculty::find($id);
        
        if ($college_faculty){
            return response()->json([
                'success'=> true,
                'Data'=> $college_faculty,
                'statusCode'=> 200,
                'message'=> "Records fetch successfully",
            ], 200);
        } else {
            return response()->json([
                'success' => false,
                'error'=>[
                  'message'=> "No such records found !",
                ],
                 'statusCode' => 404,
            ], 404);
        }
    }

    public function update(Request $request, int $id)
    {
        $validator = Validator::make($request->all(),[
            'college_id' => 'required',
            'department_id' => 'required',
            'faculty_name'=> 'required|string|max:191',
            'faculty_designation' => 'required|string|max:191'
        ]);
        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'error'=> $validator->messages(),
            ], 404);
        } else {
            $college_faculty = CollegeFaculty::find($id);

            if ($college_faculty) {
                $college_faculty->update([
                    'college_id' => $request->college_id,
                    'department_id' => $request->department_id,
                    'faculty_name' => $request->faculty_name,
                    'faculty_designation' => $request->faculty_designation,
                ]);
                return response()->json([
                     'success'=> true,
                    'message'=> 'Data updated successfully !',
                    'statusCode' => 202
                ], 202);
            } else {
                return response()->json([
                     'success'=> false,
                    'error'=> [
                        'message'=> 'No such records founds',
                    ],
                    'statusCode' => 404,
                ], 404);
            }
        }
    }
}
