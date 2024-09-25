<?php

namespace App\Http\Repository;

use App\Models\Grade;
use App\Models\Produtos;
use Exception;
use Illuminate\Support\Facades\DB;

class GradeRepository
{
    private $model;

    public function __construct()
    {
        $this->model = new Grade();
    }

    public function all()
    {
        $query = $this->model::all();

        return $query;
    }

    public function store($data)
    {
        try {
            DB::beginTransaction();
            $query = $this->model::create($data);
            DB::commit();
            return true;
        } catch(\Exception $e) {
            DB::rollBack();
            throw new Exception($e->getMessage());
        }
    }
}
