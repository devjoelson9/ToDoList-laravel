<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $nome = 'joelson';
    $sobrenome = 'souza';
    $idade = '19';
    $profissao = 'backend';
    $arr = [3, 6, 7, 9];
    $nomes = ["jota", "jeff", "joel"];

    return view('welcome', [
        'nome' => $nome, 
        'sobrenome' => $sobrenome, 
        'idade' => $idade, 
        'profissao' => $profissao, 
        'arr' => $arr, 
        'nomes' => $nomes
    ]);
});

Route::get('/contato', function(){
    return view('contact');
});