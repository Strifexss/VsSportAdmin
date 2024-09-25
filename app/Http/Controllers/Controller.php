<?php

namespace App\Http\Controllers;

abstract class Controller
{
    public function store()
    {
        try {
            $data = $this->request->all();

            $this->request->validate($this->rules, $this->messagesRules);

            $this->services->store($data);

            return redirect()->back()->with("success", $this->successMessage);

        } catch(\Exception $e) {
            return redirect()->back()->with("error", $e->getMessage());
        }
    }

    public function update()
    {
        try {
            $data = $this->request->all();

            $this->request->validate($this->rules, $this->messagesRules);

            $this->services->update($data);

            return redirect()->back()->with("success", "Item atualizado com sucesso!");

        } catch(\Exception $e) {
            return redirect()->back()->with("error", $e->getMessage());
        }
    }
}
