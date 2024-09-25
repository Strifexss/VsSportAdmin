<?php

namespace App\Http\Abstracts;

use App\Http\Controllers\Controller;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;

class CategoriaGrupoControllerAbstracts extends Controller
{
    public function index()
    {
        $categorias = $this->services->all();

        return view("categoriaGrupo.index")->with([
            'categorias' => $categorias
        ]);
    }

    public function store()
    {
        try {
            $data = $this->request->all();

            $this->request->validate($this->rules, $this->rulesMessage);

            $this->services->store($data);

            return redirect()->back()->with("success", "Categoria cadastrada com sucesso!");
        } catch(\Exception $e) {
            return redirect()->back()->with("error", $e->getMessage());
        }
    }
}
