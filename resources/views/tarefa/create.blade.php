@extends("layouts.app")

@section('title', 'criar tarefa')

@section('content')
<div class="bg-white p-10 rounded-xl shadow-lg max-w-lg">
    <h1 class="text-blue-600 text-center text-3xl font-bold mb-8">Adicionar Nova Tarefa</h1>
    
    <form action="{{ route('tarefas.store') }}" method="POST">
        @csrf
        <div class="mb-6">
            <label for="titulo" class="block mb-2 font-bold text-gray-600">Título da Tarefa</label>
            <input type="text" id="titulo" name="titulo" placeholder="Ex: estudar laravel" required
                class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
        </div>
        
        <div class="mb-6">
            <label for="descricao" class="block mb-2 font-bold text-gray-600">Descrição (Opcional)</label>
            <textarea id="descricao" name="descricao" placeholder="Detalhes adicionais da tarefa..."
                class="w-full p-3 border border-gray-300 rounded-lg resize-y min-h-[100px] focus:outline-none focus:ring-2 focus:ring-blue-500"></textarea>
        </div>
        
        <div class="mb-6">
            <label for="data-vencimento" class="block mb-2 font-bold text-gray-600">Data de Vencimento (Opcional)</label>
            <input type="date" id="data-vencimento" name="data-vencimento"
                class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
        </div>
        
        <div class="flex items-center mb-8">
            <input type="checkbox" id="importante" name="importante"
                class="form-checkbox text-blue-600 h-5 w-5 rounded-sm">
            <label for="importante" class="ml-2 text-gray-600 font-normal">Marcar como importante</label>
        </div>

        <div class="flex justify-end space-x-3">
            <a href="{{ route('home') }}" 
                class="bg-red-700 text-white font-bold py-3 px-6 rounded-lg hover:bg-gray-400 transition-colors">
                Cancelar
            </a>

            <button type="submit"
                class="bg-blue-600 text-white font-bold py-3 px-6 rounded-lg hover:bg-blue-700 transition-colors">
                Adicionar
            </button>
        </div>
    </form>
</div>
@endsection