<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventController extends Controller
{
    
    public function index() {
        $nome = "Lucas";
        $idade = 28;

        $arr = [10,20,30,40,50];

        $nomes = ["Matheus", "Maria", "Lucas", "João"];

        return view('welcome', 
        [
            'nome' => $nome,
            'idade2' => $idade,
            'profissão' => "Programador",
            'arr' => $arr,
            'nomes' => $nomes
        ]);
    }

    public function create() {
        return view('events.create');
    }

    public function contacts() {
        return view('events.contacts');
    }

    public function products() {
        return view('events.products');
    }

}
