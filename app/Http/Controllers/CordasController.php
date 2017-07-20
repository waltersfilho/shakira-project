<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CordasController extends Controller
{
    //TODO: CRIAR UM METODO QUE RETORNE ALGUNS SERVICOS PRESTADOS

    public function index(){
      return view('cordas');
    }

    public function violoes(){
      return view('violoes');
    }
}