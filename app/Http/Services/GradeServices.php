<?php

namespace App\Http\Services;

use App\Http\Abstracts\Services\GradeServicesAbstracts;
use App\Http\Abstracts\Services\ProdutoServicesAbstracts;
use App\Http\Repository\GradeRepository;
use App\Http\Repository\ProdutosRepository;

class GradeServices extends GradeServicesAbstracts
{
    public $repository;

    public function __construct()
    {
        $this->repository = new GradeRepository();
    }

    public function all()
    {
        $query = $this->repository->all();

        return $query;
    }

    public function delete($id)
    {

    }
}
