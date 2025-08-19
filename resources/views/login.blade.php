@extends('layouts.login')

@section('login')
    @section('titleCard', 'Login')    

    @if(session('status'))
        <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-4" role="alert">
            {{ session('status') }}
        </div>
    @endif
    
    <form action="{{ route('login.attempt') }}" method="POST">
        @csrf

        <x-input type="email" id="email" label="Email" name="email" required/>
        
        <x-input type="password" id="password" label="Senha" name="password" required/>

        <x-button>
            entrar
        </x-button>
    </form>
    
    <x-linkConta rota="{{ route('register') }}" botao="Cadastre-se">
     Ainda não tem uma conta? 
    </x-linkConta>
@endsection