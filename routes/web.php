<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

/* Route::get('/', function () {
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
}); */

/* Route::view('/teste', 'home', ['name' => 'GTA']); */

/* Route::get('/teste/{name?}', function($name = null){
    return view('home', ['nomeJogo' => $name]);
}) -> where('name', '[A-Za-z]+'); */

/* Route::get('/teste/{id?}/{name?}', function($id = null, $name = null){
    return view('home', ['idJogo' => $id], ['nameJogo' => $name]);
}) -> where('id', '[1-9]+', 'name', '[A-Za-z]+'); */

/* Route::get('/contato', function(){
    return view('contact');
})-> name('index'); */

/* Route::get('/home', function(){
    return view('home');
}); */

Route::get('/home', [HomeController::class, 'index']);