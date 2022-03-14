<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Services\UserService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use MongoDB\Driver\Session;

class AuthController extends Controller
{
    public $userService;
    public function __construct(UserService $userService)
    {
        $this->userService = $userService;
    }

    public function showFormLogin()
    {
        return view('auth.login');
   }

    public function login(Request $request)
    {
        if ($this->userService->login($request)){
            return redirect()->route('blogs.index');

//        $user = $request->only('email','password');
//        if (Auth::attempt($user)){
//            return redirect()->route('blogs.index');
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


    public function showForm()
    {
        $roles = Role::all();

        return view('auth.register',compact('roles'));
    }

    public function register(Request $request)
    {
        $this->userService->create($request);
        return redirect()->route('login');
    }
}
