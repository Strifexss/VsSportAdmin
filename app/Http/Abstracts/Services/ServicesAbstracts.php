<?php

namespace App\Http\Abstracts\Services;

use Exception;
use Illuminate\Support\Facades\Auth;

abstract class ServicesAbstracts
{
    public function __construct()
    {
    }

    public function all()
    {
        $query = $this->repository->all();

        return $query;
    }

    public function store(array $data) {
        $query = $this->repository->store($data);

        return $query;
    }

    public function delete(string $id) {
        $query = $this->repository->delete($id);

        return $query;
    }

    public function find($id)
    {
        $query = $this->repository->find($id);

        return $query;
    }

    public function prepareSelect($data, $label)
    {
        $select = [];

        foreach($data as $values) {
            $select[$values->id] = $values->$label;
        }

        return $select;
    }

    public function update($data)
    {
        $query = $this->repository->update($data);

        return $query;
    }

}
