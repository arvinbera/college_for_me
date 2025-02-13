<?php

namespace App\Http\Controllers\CollegeAdmin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Http\Controllers\ApiResponseCntroller;

class AuthenticationController extends Controller
{
    /**
     * College Admin Login
     */
    public function college_admin_login(Request $request)
    {
        // Validate input
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|string|min:6',
        ]);

        // Attempt login
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            $user = Auth::user();
            $success['token'] = $user->createToken('MyApp')->plainTextToken;
            $success['name'] = $user->name;

            $data = [
                'token' => $success['token'],
                'name' => $success['name'],
            ];
            
            // Successful login response
             return ApiResponseCntroller::response_success(data: $data, message: 'Login Success', status: 200);
            

        } else {
            // Failed login response

            return ApiResponseCntroller::response_error(message: 'Invalid email or password.', status: 401);

        }
    }

    public function api_logout(Request $request)
    {
        auth()->user()->tokens()->delete();
        return ApiResponseCntroller::response_success(message: 'Logout Success', status: 200);
      
    }

    public function verify_user(Request $request, $token)
    {
        if (!$token){
            return ApiResponseCntroller::response_error([], 'Unauthorized', 401);
        }

        if (Auth::check()) {
            return ApiResponseCntroller::response_success($request->user());
        } else {
            return ApiResponseCntroller::response_error([], 'Unauthorized', 401);
        }
    }

}
