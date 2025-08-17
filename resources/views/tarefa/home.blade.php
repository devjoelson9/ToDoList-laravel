<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>To-Do List</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 min-h-screen text-gray-800 flex flex-col">
    <header class="bg-white shadow-md w-full py-4 px-6 flex items-center justify-between">
        <div class="flex items-center space-x-4">
            @auth
                <h1 class="text-blue-600 text-2xl font-bold">
                    Olá, <b class="text-gray-800">{{ Auth::user()->name }}</b>
                </h1>
            @else
                <h1 class="text-blue-600 text-2xl font-bold">
                    Bem-vindo(a) ao To-Do List!
                </h1>
            @endauth
        </div>

        @auth
            <form action="{{ route('logout') }}" method="POST">
                @csrf
                <button type="submit" class="bg-red-500 text-white font-semibold py-2 px-4 rounded-lg shadow-md hover:bg-red-600 transition-colors">
                    Sair
                </button>
            </form>
        @endauth
    </header>

    <div class="flex-grow flex items-center justify-center p-6">
        <div class="container bg-white p-10 rounded-xl shadow-lg text-center max-w-xl w-full">
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

</body>
</html>
