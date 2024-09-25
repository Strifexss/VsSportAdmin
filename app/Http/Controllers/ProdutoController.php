<?php

namespace App\Http\Controllers;

use App\Http\Abstracts\ProdutoControllerAbstract;
use App\Http\Services\CategoriaGrupoServices;
use App\Http\Services\ProdutoServices;
use Illuminate\Http\Request;

class ProdutoController extends ProdutoControllerAbstract
{
    protected $services;
    protected $request;
    protected $categoriaServices;

    protected $rules = [
        'nome' => 'required',
        'categoria_id' => 'required',
        'sexo' => 'required',
    ];

    protected $messagesRules = [
        'nome.required' => 'O campo nome é obrigatório.',
        'categoria_id.required' => 'O campo categoria é obrigatório.',
        'sexo.required' => 'O campo sexo é obrigatório.',
    ];

    public function __construct(Request $request)
    {
        $this->services = new ProdutoServices();
        $this->request = $request;
        $this->categoriaServices = new CategoriaGrupoServices();
    }
}
