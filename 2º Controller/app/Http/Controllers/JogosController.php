<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JogosController extends Controller
{
    function index(){
       // dd('Ola mundo');           //dd é um help do laravel que vai mostrar uma mensagem com um visual mas bonito!
       $nome = 'FIFA';
       $id = 22;
       return view('jogos',['nome'=>$nome, 'id'=>$id]);
    }
}
