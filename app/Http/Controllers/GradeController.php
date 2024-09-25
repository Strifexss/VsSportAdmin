<?php

namespace App\Http\Controllers;

use App\Http\Abstracts\GradeControllerAbstracts;
use App\Http\Services\GradeServices;
use Illuminate\Http\Request;

class GradeController extends GradeControllerAbstracts
{
    protected $services;
    protected $request;

    protected $rules = [
        'nome' => 'required',
    ];

    protected $messagesRules = [
        'nome.required' => 'O campo nome é obrigatório.',
    ];

    public function __construct(Request $request)
    {
        $this->services = new GradeServices();
        $this->request = $request;
    }
}
