<?php

namespace App\Http\Abstracts;

use App\Http\Abstracts\Services\AuthServicesAbstracts;
use App\Http\Abstracts\Services\UserServicesAbstracts;
use App\Models\Categoria;
use App\Models\User;
use Exception;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class RepositoryAbstracts
{
    public function all()
    {
        return $this->model::all();
    }

    public function store($data)
    {
        DB::beginTransaction();
        try {
            $query = $this->model::create($data);
            DB::commit();
            return true;
        } catch(\Exception $e) {
            DB::rollback();
            return false;
        }
    }

    public function find($id)
    {
        return $this->model::find($id);
    }

    public function delete($id)
    {
        DB::beginTransaction();
        try {
            $query = $this->model::find($id)->delete();
            DB::commit();
            return true;
        } catch(\Exception $e) {
            DB::rollback();
            return false;
        }
    }

    public function update($data)
    {
        DB::beginTransaction();
        try {
            $object = $this->model::find($data['id']);
            $object->update($data);
            DB::commit();
            return $object;

        } catch(\Exception $e) {
            DB::rollBack();
            throw new Exception($e->getMessage());
        }
    }
}
