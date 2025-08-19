@extends('layouts.app')

@section('title', 'editar tarefa')

@section('content')
<div class="container bg-white p-10 rounded-xl shadow-lg max-w-lg w-full relative">
    <a href="{{ route('home') }}" class="absolute top-5 left-5 text-gray-700 bg-gray-200 px-4 py-2 rounded-lg font-bold hover:bg-gray-300 transition-colors">
        ← Início
    </a>
    <h1 class="text-blue-600 text-center text-3xl font-bold mb-8 mt-4">
        Editar Tarefa #{{ $tarefa->id }}
    </h1>
    
    <form action="{{ route('tarefas.update', $tarefa->id) }}" method="POST">
        @csrf
        @method('PUT') 
        <x-inputCampo 
            type="text" 
            id="titulo" 
            name="titulo" 
            label="Título da tarefa" 
            value="{{ old('titulo', $tarefa->titulo ?? '') }}" 
        required/>
        
        <x-textAreaCampo 
            type="text" 
            id="descricao" 
            name="descricao" 
            label="Descrição (Opcional)" 
            value="{{ old('descricao', $tarefa->descricao) }}" 
        required/>

        <x-inputCampo 
            type="date" 
            id="data-vencimento" 
            name="data-vencimento" 
            label="Data de Vencimento (Opcional)" 
            value="{{ old('data-vencimento', $tarefa->data_vencimento) }}" 
        required/>
        
        
        
        <div class="flex items-center mb-8">
            <input type="checkbox" id="importante" name="importante" {{ old('importante', $tarefa->importante) ? 'checked' : '' }} 
                   class="form-checkbox text-blue-600 h-5 w-5 rounded-sm">
            <label for="importante" class="ml-2 text-gray-600 font-normal">Marcar como importante</label>
        </div>
        
        <div class="flex justify-end space-x-3">
            <button type="button" onclick="window.history.back()"
                    class="bg-red-700 text-white font-bold py-3 px-6 rounded-lg hover:bg-red-300 transition-colors">
                Cancelar
            </button>
            <x-button>
                salvar alterações
</x-button>
        </div>
    </form>
</div>
@endsection