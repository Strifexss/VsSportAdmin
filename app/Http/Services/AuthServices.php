<?php

namespace App\Http\Services;

use App\Http\Abstracts\Services\AuthServicesAbstracts;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class AuthServices extends AuthServicesAbstracts
{
    protected $model;

    public function __construct()
    {
        $this->model = new User();
    }

    public function login(array $credentials)
    {
        if (Auth::attempt($credentials)) {
            return Auth::user();
        }

        return null;
    }

    public function logout()
    {
        Auth::logout();

        return true;
    }
}
