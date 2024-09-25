<?php

namespace App\Http\Abstracts;

use App\Http\Controllers\Controller;
use App\Http\Services\CategoriaGrupoServices;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;

class ProdutoControllerAbstract extends Controller
{

    private $sexo = [
        'Masculino' => "Masculino",
        'Feminino' => "Feminino",
        'Unisex' => "Unisex"
    ];

    public function __construct()
    {

    }

    public function index()
    {
        $produtos = $this->services->all();

        return view("produtos.index")->with([
            'produtos' => $produtos,
        ]);
    }

    public function novo()
    {
        $categorias = $this->categoriaServices->all();

        $categorias = $this->categoriaServices->prepareSelect($categorias, "nome");

        return view("produtos.form")->with([
            'categorias' => $categorias,
            'sexo' => $this->sexo,
        ]);
    }

    public function edit($id)
    {
        $categorias = $this->categoriaServices->all();
        $categorias = $this->categoriaServices->prepareSelect($categorias, "nome");
        $produto = $this->services->find($id);

        return view("produtos.formEdit")->with([
            'categorias' => $categorias,
            'sexo' => $this->sexo,
            'produto' => $produto
        ]);
    }

    public function store()
    {
        try {
            $this->request->validate($this->rules, $this->messagesRules);
            $data = $this->request->all();
            $this->services->store($data);

            return redirect("produtos")->with("success", "Produto Cadastrado com sucesso!");
        }
        catch(\Exception $e) {
            return redirect()->back()->withInput()->with("error", $e->getMessage());
        }
    }
}
