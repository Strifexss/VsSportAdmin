<?php

namespace App\Http\Abstracts;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

abstract class AuthControllerAbstract
{
    protected $request;

    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    public function authView()
    {
        return view("Auth.index");
    }

    public function login()
    {
        $credentials = $this->request->only(['email', 'password']);

        $this->request->validate($this->rulesValidate);

        $auth = $this->services->login($credentials);

        if ($auth) {
           return redirect("/dashboard");
        } else {
            return redirect("/")->with('error', "Usuário não encontrado!");
        }
    }

    public function register()
    {
        $data = $this->request->all();

        $this->services->register($data);

        return redirect()->back();
    }

    public function logout()
    {
        $logout = $this->services->logout();

        if($logout) {
            return redirect("/");
        }

        return redirect()->back()->with("error", "Erro ao deslogar!");
    }
}
