@extends('layouts.app')

@section('title', 'home')

@section('content')

<div class="flex-grow flex items-center justify-center p-6">
    <div class="container bg-white p-10 rounded-xl shadow-lg text-center max-w-xl w-full">
        <h1 class="text-blue-600 text-5xl mb-12">Lista de tarefas</h1>
        <h2 class="text-gray-600 text-lg mb-8">Organize sua vida, uma tarefa de cada vez.</h2>

        <div class="flex flex-col gap-4">
            <a href="{{ route('tarefas.listar') }}" class="bg-blue-600 text-white font-bold py-4 px-6 rounded-lg shadow hover:bg-blue-700 transition-colors transform hover:-translate-y-1">
                Minhas Tarefas
            </a>
            <a href="{{ route('tarefas.create') }}" class="bg-blue-600 text-white font-bold py-4 px-6 rounded-lg shadow hover:bg-blue-700 transition-colors transform hover:-translate-y-1">
                Adicionar Nova Tarefa
            </a>
        </div>
    </div>
</div>

@endsection