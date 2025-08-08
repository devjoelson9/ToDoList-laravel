<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        <link rel="stylesheet" href="/css/style.css">
        <script src="/js/script.js"></script>
    </head>
    <body>
        <h1>Bem vindo a minha rota de nomes</h1>
        <!-- <p>{{$nome}}</p> 

        @if($nome == "joelson")
            <p>o nome é {{$nome}} e o sobrenome é {{$sobrenome}} e a idade é {{$idade}} e trabalha como {{$profissao}}</p>
        @else
            <p>o nome não é joelson</p>
        @endif

        @for($i = 0; $i < count($arr); $i++)
            <p>{{$arr[$i]}} - {{$i}}</p>
            @if($i == "2")
                <p>2</p>
            @endif
        @endfor

        @php
            $name = "jefferson";
            echo $name;
        @endphp

        @foreach($nomes as $nome)
            <p>{{$loop -> index}}</p>
            <p>{{$nome}}</p>
        @endforeach -->

        <p>{{ $name}}</p>


    </body>
</html>