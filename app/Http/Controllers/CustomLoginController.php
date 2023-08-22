<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Hash;
use Session;
use App\Models\User;
use Auth;
use App\Helpers;

class CustomLoginController extends Controller
{
    public function cus_login(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {

            return redirect()->intended('dashboard')
                ->withSuccess('Signed in');
        }
        return redirect("login-new-form")->withSuccess('Login details are not valid');
    }

    public function dashboard()
    {
        if (Auth::check()) {
            return view('dashboard');
        }
        return redirect("login-new-form")->withSuccess('You are not allowed to access');
    }


    public function loginIndex(Request $request)
    {
        return view('loginForm.loginform');
    }
    public function registrationIndex(Request $request)
    {
        return view('loginForm.registrationform');
    }
}
