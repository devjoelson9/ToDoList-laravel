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
        
        <div class="mb-6">
            <label for="titulo" class="block mb-2 font-bold text-gray-600">Título da Tarefa</label>
            <input type="text" id="titulo" name="titulo" value="{{ old('titulo', $tarefa->titulo) }}" required 
                   class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
        </div>
        
        <div class="mb-6">
            <label for="descricao" class="block mb-2 font-bold text-gray-600">Descrição (Opcional)</label>
            <textarea id="descricao" name="descricao" rows="4"
                      class="w-full p-3 border border-gray-300 rounded-lg resize-y focus:outline-none focus:ring-2 focus:ring-blue-500">{{ old('descricao', $tarefa->descricao) }}</textarea>
        </div>
        
        <div class="mb-6">
            <label for="data-vencimento" class="block mb-2 font-bold text-gray-600">Data de Vencimento (Opcional)</label>
            <input type="date" id="data-vencimento" name="data-vencimento" value="{{ old('data-vencimento', $tarefa->data_vencimento) }}"
                   class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
        </div>
        
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
            <button type="submit"
                    class="bg-blue-600 text-white font-bold py-3 px-6 rounded-lg hover:bg-blue-700 transition-colors">
                Salvar Alterações
            </button>
        </div>
    </form>
</div>
@endsection