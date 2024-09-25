<?php

namespace App\Http\Abstracts\Services;

use Illuminate\Support\Facades\Auth;

abstract class AuthServicesAbstracts
{
    public function __construct()
    {
    }

    public function register($data)
    {
        $data['name'] = "Matheus";

        $create = $this->model::create($data);

        dd($create);
    }

}
