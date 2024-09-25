<?php

namespace App\Http\Services;

use App\Http\Abstracts\Services\ProdutoServicesAbstracts;
use App\Http\Repository\ProdutosRepository;

class ProdutoServices extends ProdutoServicesAbstracts
{
    protected $repository;

    public function __construct()
    {
        $this->repository = new ProdutosRepository();
    }

    public function all()
    {
        $query = $this->repository->all();

        return $query;
    }

    public function store($data)
    {
        $data = $this->validarInputsToggle($data);
        $query = $this->repository->store($data);

        return $query;
    }
}
