<?php

namespace App\Http\Controllers;

use App\Http\Abstracts\UserControllerAbstract;
use App\Http\Services\UserServices;
use Illuminate\Http\Request;

class UserController extends UserControllerAbstract
{
    public $request;

    protected $validate = [
        'name' => "required",
        'email' => 'required',
        'password' => 'required'
    ];

    protected $service;

    public function __construct(Request $request)
    {
        $this->request = $request;
        $this->services = new UserServices();
    }
}
