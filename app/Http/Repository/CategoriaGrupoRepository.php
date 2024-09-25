<?php

namespace App\Http\Repository;

use App\Http\Abstracts\RepositoryAbstracts;
use App\Http\Abstracts\Services\AuthServicesAbstracts;
use App\Http\Abstracts\Services\UserServicesAbstracts;
use App\Models\Categoria;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class CategoriaGrupoRepository extends RepositoryAbstracts
{
    protected $model;

    public function __construct()
    {
        $this->model = new Categoria();
    }

}
