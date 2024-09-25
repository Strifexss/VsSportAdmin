<?php

namespace App\Http\Services;

use App\Http\Abstracts\Services\AuthServicesAbstracts;
use App\Http\Abstracts\Services\UserServicesAbstracts;
use App\Http\Repository\UserRepository;
use App\Models\User;
use Exception;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class UserServices extends UserServicesAbstracts
{
    protected $repository;

    protected $emailsNaoExcluiveis = [
        'matheushlm2@gmail.com',
        'rocombole007@gmail.com'
    ];

    public function __construct()
    {
        $this->repository = new UserRepository();
    }

    public function store(array $data):bool
    {
        $query = $this->repository->store($data);

        if($query) {
            return true;
        }

        return false;
    }

    public function delete(string $id):bool
    {
        $this->validateUserDelete($id);

        $query = $this->repository->delete($id);

        return $query;
    }



}
