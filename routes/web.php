<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\TarefaController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/login', [AuthController::class, 'index'])->name('login');
Route::post('/login', [AuthController::class, 'loginAttempt'])->name('login.attempt');

Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::post('/register', [AuthController::class, 'registerAttempt'])->name('register.attempt');

Route::middleware('auth')->group(function () {
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

    Route::get('/minhasTarefas', [TarefaController::class, 'listarTarefas'])->name('tarefas.listar');
    Route::get('/criarTarefa', [TarefaController::class, 'create'])->name('tarefas.create');
    Route::post('/criarTarefa', [TarefaController::class, 'store'])->name('tarefas.store');
    Route::get('/tarefas/{tarefa}/editar', [TarefaController::class, 'edit'])->name('tarefas.edit');
    Route::put('/tarefas/{tarefa}', [TarefaController::class, 'update'])->name('tarefas.update');
    Route::delete('/tarefas/{tarefa}', [TarefaController::class, 'destroy'])->name('tarefas.destroy');
});