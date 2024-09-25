<?php

namespace App\Http\Repository;

use App\Http\Abstracts\Services\AuthServicesAbstracts;
use App\Http\Abstracts\Services\UserServicesAbstracts;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class UserRepository
{
    private $model;

    public function __construct()
    {
        $this->model = new User();
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
        return User::find($id);
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

}
