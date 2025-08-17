<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 flex justify-center items-center min-h-screen text-gray-800">

    <div class="bg-white p-10 rounded-xl shadow-lg max-w-md w-full">
        <h1 class="text-blue-600 text-center text-3xl font-bold mb-6">Login</h1>

        @if(session('status'))
            <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-4" role="alert">
                {{ session('status') }}
            </div>
        @endif
        
        <form action="{{ route('login.attempt') }}" method="POST">
            @csrf

            <div class="mb-4">
                <label for="email" class="block text-gray-700 font-bold mb-2">Email</label>
                <input type="email" id="email" name="email" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-600" required>
                @error('email')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="password" class="block text-gray-700 font-bold mb-2">Senha</label>
                <input type="password" id="password" name="password" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-600" required>
                @error('password')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <button type="submit" class="w-full bg-blue-600 text-white font-bold py-2 px-4 rounded-lg hover:bg-blue-700 transition-colors">
                Entrar
            </button>
        </form>
        
        <p class="text-center text-gray-500 text-sm mt-6">
            Ainda não tem uma conta? 
            <a href="{{ route('register') }}" class="text-blue-600 font-bold hover:underline">
                Cadastre-se
            </a>
        </p>
    </div>

</body>
</html>