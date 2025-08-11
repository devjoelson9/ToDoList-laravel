<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\TarefaController;
use Illuminate\Support\Facades\Route;

//Rota para exibir a pagina pricipal do toDo-List
Route::get('/', [HomeController::class, 'index'])->name('home');

//rota para listar as tarefas
Route::get('minhasTarefas', [TarefaController::class, 'listarTarefas'])->name('tarefas.listar');

//Rotas para criar a tarefa
Route::get('/criarTarefa', [TarefaController::class, 'create'])->name('tarefas.create');
Route::post('/criarTarefa', [TarefaController::class, 'store'])->name('tarefas.store');

Route::get('/tarefas/{tarefa}/editar', [TarefaController::class, 'edit'])->name('tarefas.edit');

// Rota para atualizar a tarefa no banco de dados (o formulário será enviado para cá)
Route::put('/tarefas/{tarefa}', [TarefaController::class, 'update'])->name('tarefas.update');

//rota para deletar as tarefas
Route::delete('/tarefas/{tarefa}', [TarefaController::class, 'destroy'])->name('tarefas.destroy');