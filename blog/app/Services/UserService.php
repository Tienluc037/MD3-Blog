<?php

namespace App\Services;

use App\Models\User;
use App\Repositories\UserRepository;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserService extends BaseService
{
    public $userRepository;

    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function login($request)
    {
        $data = $request->only('email', 'password');
        if (Auth::attempt($data)) {
            return true;
        } else {
            return false;
        }
    }

    public function create($request)
    {
        $data = $request->only('name', 'email', 'password', 'role');
        $data['password'] = Hash::make($data['password']);
        $user = User::create($data);
        $user->roles()->sync($request->role);
        return $this->sendResponse($user, 'Create user successfully', 201);
    }
}
