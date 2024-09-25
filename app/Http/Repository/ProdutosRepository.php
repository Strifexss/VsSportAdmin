<?php

namespace App\Http\Repository;

use App\Http\Abstracts\RepositoryAbstracts;
use App\Models\Produtos;
use Exception;
use Illuminate\Support\Facades\DB;

class ProdutosRepository extends RepositoryAbstracts
{
    protected $model;

    public function __construct()
    {
        $this->model = new Produtos();
    }

    private function queryBase()
    {
        $query = DB::table("produtos")
                    ->join("categoria", function($join) {
                        $join->on("categoria.id", "produtos.categoria_id")
                        ->whereNull("categoria.deleted_at");
                    })
                    ->whereNull("produtos.deleted_at");

        return $query;
    }

    public function all()
    {
        $query = $this->queryBase()
                    ->select([
                        "produtos.*",
                        "categoria.nome as categoria_nome",
                        "categoria.id as categoria_id"
                    ])
                    ->get();

        return $query;
    }

    public function store($data)
    {
        try {
            DB::beginTransaction();
            $query = $this->model::create($data);
            DB::commit();
            return true;
        } catch(\Exception $e) {
            DB::rollBack();
            throw new Exception($e->getMessage());
        }
    }
}
