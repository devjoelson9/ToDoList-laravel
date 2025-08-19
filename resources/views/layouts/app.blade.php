<html>
    <head>
        <title>App Name - @yield('title')</title>
        <script src="https://cdn.tailwindcss.com"></script>
    </head>
    <body class="bg-gray-100 text-gray-800">
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

        <div class="min-h-screen flex items-center justify-center">
            @yield('content')
        </div>
    </body>
</html>