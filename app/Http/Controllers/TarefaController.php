<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tarefa;

class TarefaController extends Controller{

    public function listarTarefas(){
        $tarefas = auth()->user()->tarefas; 

        return view('tarefa.listarTarefas', compact('tarefas'));
    }

    public function create(){
        return view('tarefa.create');
    }

    public function store(Request $request){
    $validatedData = $request->validate([
        'titulo' => 'required|string|max:255',
        'descricao' => 'nullable|string',
        'data-vencimento' => 'nullable|date',
        'importante' => 'nullable',
    ]);

    $importante = $request->has('importante');

    auth()->user()->tarefas()->create([
        'titulo' => $validatedData['titulo'],
        'descricao' => $validatedData['descricao'],
        'data_vencimento' => $validatedData['data-vencimento'],
        'importante' => $importante, 
    ]);

    return redirect()->route('home')->with('success', 'Tarefa criada com sucesso!');
}
   

    public function edit(Tarefa $tarefa){
        return view('tarefa.editarTarefa', compact('tarefa'));
    }

    public function update(Request $request, Tarefa $tarefa){
        $tarefa->update([
            'titulo' => $request->input('titulo'),
            'descricao' => $request->input('descricao'),
            'data_vencimento' => $request->input('data-vencimento'),
            'importante' => $request->has('importante'),
        ]);

        return redirect()->route('home')->with('success', 'Tarefa atualizada com sucesso!');
    }

    public function destroy(Tarefa $tarefa){
        $tarefa->delete();

        return redirect()->route('home')->with('success', 'Tarefa excluída com sucesso!');
    }
}
