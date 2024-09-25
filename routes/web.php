<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoriaGrupoController;
use App\Http\Controllers\ClientesController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\GradeController;
use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get("/", [AuthController::class, 'authView']);
Route::get("/login", [AuthController::class, 'login'])->name('login');
Route::post("/user", [AuthController::class, 'register']);
Route::get("/logout", [AuthController::class, "logout"]);

Route::middleware(['auth'])->group(function () {
    // Dashboard
    Route::get("/dashboard", [DashboardController::class, "index"]);

    // Usuarios
    Route::get("/usuarios", [UserController::class, "index"]);
    Route::post("/usuarios", [UserController::class, "store"]);
    Route::post("/usuarios/delete/{id}", [UserController::class, "delete"]);

    // Produtos
    Route::get("/produtos", [ProdutoController::class, "index"]);
    Route::get("/produtos/novo", [ProdutoController::class, "novo"]);
    Route::post("/produtos", [ProdutoController::class, "store"]);
    Route::get("/produtos/{id}", [ProdutoController::class, "edit"]);
    Route::post("/produtos/edit", [ProdutoController::class, "update"]);

    // CategoriaGrupo
    Route::get("/categoria", [CategoriaGrupoController::class, "index"]);
    Route::post("/categoria", [CategoriaGrupoController::class, "store"]);

    // Grade
    Route::get("/grade", [GradeController::class, "index"]);
    Route::post("/grade", [GradeController::class, "store"]);
});
