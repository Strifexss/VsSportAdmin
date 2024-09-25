<?php

namespace App\Http\Controllers;

use App\Http\Abstracts\AuthControllerAbstract;
use App\Http\Services\AuthServices;
use Illuminate\Http\Request;

class AuthController extends AuthControllerAbstract
{
    protected $services;

    protected $rulesValidate = [
        'email' => "required|email",
        'password' => "required|min:6"
    ];

    public function __construct(Request $request, AuthServices $services)
    {
        $this->services = $services;
        parent::__construct($request);
    }
}

