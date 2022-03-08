<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use MongoDB\Driver\Session;

class AuthController extends Controller
{
    public function showFormLogin()
    {
        return view('auth.login');
   }

    public function login(Request $request)
    {
        $user = $request->only('email','password');
        if (Auth::attempt($user)){
            return redirect()->route('blogs.index');
        }else {
            \Illuminate\Support\Facades\Session::flash('mgs','Tài khoản hoặc mật khẩu không chính xác');
            return redirect()->back();
        }
   }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }
}
