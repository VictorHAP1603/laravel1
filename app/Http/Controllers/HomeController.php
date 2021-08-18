<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //

    public function index() {

        $name = "Victor";
        $age = 20;



        $lista = [
          ['nome'=>'Victor', 'idade'=>20],
          ['nome'=>'Mario', 'idade'=>40],
          ['nome'=>'Betina', 'idade'=>10],
        ];

        $data = [
            "nome"=>$name,
            "idade"=>$age,
            "lista"=>$lista
        ];

        return view('home', $data);
    }
}
