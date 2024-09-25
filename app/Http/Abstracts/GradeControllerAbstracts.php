<?php

namespace App\Http\Abstracts;

use App\Http\Controllers\Controller;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;

class GradeControllerAbstracts extends Controller
{
    protected $successMessage = "Grade cadastrada com sucesso!";

    public function index()
    {
        $grades = $this->services->all();
        
        return view("grade.index")->with([
           'grades' => $grades
        ]);
    }



    public function delete($id)
    {

    }
}
