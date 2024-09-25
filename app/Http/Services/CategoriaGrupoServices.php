<?php

namespace App\Http\Services;

use App\Http\Abstracts\Services\AuthServicesAbstracts;
use App\Http\Abstracts\Services\CategoriaGrupoServicesAbstracts;
use App\Http\Abstracts\Services\UserServicesAbstracts;
use App\Http\Repository\CategoriaGrupoRepository;
use App\Http\Repository\UserRepository;
use App\Models\User;
use Exception;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class CategoriaGrupoServices extends CategoriaGrupoServicesAbstracts
{
    protected $repository;


    public function __construct()
    {
        $this->repository = new CategoriaGrupoRepository();
    }


    public function store($data)
    {
        $query = $this->repository->store($data);

        return $query;
    }

    public function delete($id)
    {
        return true;
    }
}
