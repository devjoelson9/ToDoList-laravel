<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>To-Do List</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen text-gray-800">

<div class="container bg-white p-10 rounded-xl shadow-lg text-center max-w-xl w-full">
    <h1 class="text-blue-600 text-4xl font-bold mb-2">Bem-vindo(a) ao seu To-Do List!</h1>
    <p class="text-gray-600 text-lg mb-8">Organize sua vida, uma tarefa de cada vez.</p>

    <div class="flex flex-col gap-4">
        <a href="{{ route('tarefas.listar') }}" class="bg-blue-600 text-white font-bold py-4 px-6 rounded-lg shadow hover:bg-blue-700 transition-colors transform hover:-translate-y-1">
            Minhas Tarefas
        </a>
        <a href="{{ route('tarefas.create') }}" class="bg-blue-600 text-white font-bold py-4 px-6 rounded-lg shadow hover:bg-blue-700 transition-colors transform hover:-translate-y-1">
            Adicionar Nova Tarefa
        </a>
    </div>

</div>

</body>
</html>