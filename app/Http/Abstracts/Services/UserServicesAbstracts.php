<?php

namespace App\Http\Abstracts\Services;

use Exception;
use Illuminate\Support\Facades\Auth;

abstract class UserServicesAbstracts
{
    public function __construct()
    {
    }

    abstract public function store(array $data):bool;

    abstract public function delete(string $id):bool;

    protected function validateUserDelete(string $id):void
    {
        $user = $this->repository->find($id);

        if(in_array($user->email, $this->emailsNaoExcluiveis)) {
            throw new Exception("Esse usuário não pode ser excluído!");
        }
    }

}
