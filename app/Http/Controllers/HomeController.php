<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller{
    public function index(){
        //dd('ola mundo');
        $sobrenome = 'souza';
        $nome = 'Joelson';
        return view('home', ['nome'=> $nome, 'sobrenome' => $sobrenome]);
    }
}
