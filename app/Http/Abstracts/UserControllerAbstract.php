<?php

namespace App\Http\Abstracts;

use App\Models\User;
use Exception;
use Illuminate\Http\Request;

class UserControllerAbstract
{
    public function index()
    {
        $model = new User();

        $users = $model::all();

        return view("users.index")->with(["users" => $users]);
    }

    public function store()
    {
        $data = $this->request->validate($this->validate);

        if($this->services->store($data)) {
            return redirect("/usuarios")->with("success", "Usuário cadastrado com sucesso!");
        }

        return redirect("/usuarios")->with("error", "Houve um erro ao cadastrar o usuário!");

    }

    public function delete($id)
    {
        try {
            $query = $this->services->delete($id);

            if($query) {
                return [
                    'status' => true,
                    'message' => "Usuario deletado com sucesso!"
                ];
            }

            return [
                'status' => false,
                'message' => "Houve um erro ao ao deletar o usuário!"
            ];

        }
        catch(\Exception $e) {
            return [
                'status' => false,
                'message' => $e->getMessage()
            ];
        }
    }
}
