@extends('layouts.login')

@section('login')
    @section('titleCard', 'Registre-se')

    @if(session('success'))
        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-4" role="alert">
            {{ session('success') }}
        </div>
    @endif

    <form action="{{ route('register.attempt') }}" method="POST">
        @csrf

        <x-input id="name" label="Nome" name="name" required />
        
        <x-input id="email" label="Email" type="email" name="email" required />
        
        <x-input id="password" label="Senha" type="password" name="password" required />
        
        <x-input id="password_confirmation" label="Confirmar senha" type="password" name="password_confirmation" required />
        
        <x-button>
            Registre-se
        </x-button>
    </form>

    <x-linkConta rota="{{ route('login') }}" botao="Entrar">
    Já tem uma conta?
    </x-linkConta>
@endsection