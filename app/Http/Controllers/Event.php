<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Event extends Controller
{
    //
    public function index(){
        $nome = "Thiago";
        $lista = [1,2,3,4];

        $context = [
            "nome" => $nome,
            "lista" => $lista,
        ];

        return view('welcome', $context);
    }

    //
    public function create(){
        

        $context = [
        ];

        return view('events.create', $context);
    }
}
