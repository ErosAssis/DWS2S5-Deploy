<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index(){

        $nome = "Eros";
        $idade = 20;
    
        $arr = [1, 2, 3, 4, 5];
    
        $nomes = ["Victor", "Eros", "Arthur", "João Otávio"];
    
        return view('welcome', 
            [
                'nome' =>  $nome,
                'idade' => $idade, 
                'profissao' => "Garoto de Programa",
                'arr' => $arr,
                'nomes' => $nomes
            ]);
    }

    public function create() {
        return view('events.create');
    }
}
