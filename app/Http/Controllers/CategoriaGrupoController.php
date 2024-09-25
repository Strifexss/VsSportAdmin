<?php

namespace App\Http\Controllers;

use App\Http\Abstracts\CategoriaGrupoControllerAbstracts;
use App\Http\Services\CategoriaGrupoServices;
use Illuminate\Http\Request;

class CategoriaGrupoController extends CategoriaGrupoControllerAbstracts
{
    protected $request;
    protected $services;

    protected $rules = [
        'nome' => 'required'
    ];

    protected $rulesMessage = [
        'nome.required' => 'O campo nome é obrigatório.'
    ];

    public function __construct(Request $request)
    {
        $this->request = $request;
        $this->services = new CategoriaGrupoServices();
    }
}
