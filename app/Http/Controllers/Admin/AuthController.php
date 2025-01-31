<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public function admin_login()
    {
        return view('admin.login');
    }

    public function admin_login_submit(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ], [
            'email.required' => 'Please enter your email address.',
            'password.required' => 'Please enter your password.',
            'email.email' => 'The email address is invalid.',
        ]);

        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials, true)) {
            if (Auth::user()->role == 1) {
                return redirect()->route('dashboard');
            } elseif (Auth::user()->role == 4) {
                return redirect()->route('lead.dashboard');
            } else {
                return redirect()->back();
            }
        } else {
            flash('Invalid email or password', 'error');
            return redirect()->back();
        }
    }

    public function admin_logout()
    {
        Session::flush();
        Auth::logout();
        return redirect()->route('admin.login');
    }
    public function lead_admin_logout()
    {
        Session::flush();
        Auth::logout();
        return redirect()->route('admin.login');
    }
}
