@extends('layouts.app')

@section('title', 'lista de tarefas')

@section('content')
<div class="container bg-white p-10 rounded-xl shadow-lg max-w-3xl w-full relative">
    <a href="{{ route('home') }}" class="absolute top-5 left-5 text-gray-700 bg-gray-200 px-4 py-2 rounded-lg font-bold hover:bg-gray-300 transition-colors">
        ← Início
    </a>
    <h1 class="text-blue-600 text-center text-4xl font-bold mb-8 mt-4">
        Minhas Tarefas
    </h1>
    
    @if(empty($tarefas))
        <p class="text-center text-gray-500 text-lg mt-10">
            Nenhuma tarefa encontrada. 
            <a href="{{ route('tarefas.create') }}" class="text-blue-600 font-bold hover:underline">
                Adicionar nova tarefa
            </a>
        </p>
    @else
        @foreach($tarefas as $tarefa)
            <div class="tarefa-item bg-gray-50 border border-gray-200 rounded-lg p-5 mb-4 flex justify-between items-center transform transition-transform hover:-translate-y-1 hover:shadow-md">
                <div>
                    <div class="text-2xl font-bold">
                        {{ $tarefa->titulo }}
                    </div>
                    @if(isset($tarefa->descricao))
                        <p class="text-gray-600 mt-1">
                            {{ $tarefa->descricao }}
                        </p>
                    @endif
                    @if(isset($tarefa->data_vencimento))
                        <p class="text-sm text-gray-500 mt-2">
                            Vencimento: {{ \Carbon\Carbon::parse($tarefa->data_vencimento)->format('d/m/Y') }}
                        </p>
                    @endif
                </div>
                <div class="flex items-center space-x-4">
                    <a href="{{ route('tarefas.edit', $tarefa->id) }}" class="text-blue-600 font-bold hover:underline">
                        Editar
                    </a>
                    <form action="{{ route('tarefas.destroy', $tarefa->id) }}" method="POST" class="m-0 inline-block">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="bg-transparent border-none text-red-600 font-bold cursor-pointer hover:underline">
                            Excluir
                        </button>
                    </form>
                </div>
            </div>
        @endforeach
    @endif
</div>

@endsection