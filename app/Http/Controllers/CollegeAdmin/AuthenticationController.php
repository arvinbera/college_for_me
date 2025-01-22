<?php

namespace App\Http\Controllers\CollegeAdmin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

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

            // Successful login response
            return response()->json([
                'is_success' => true,
                'token' => $success['token'],
                'name' => $success['name'],
            ], 200);
        } else {
            // Failed login response
            return response()->json([
                'is_success' => false,
                'message' => 'Invalid email or password.',
            ], 401);
        }
    }

}
