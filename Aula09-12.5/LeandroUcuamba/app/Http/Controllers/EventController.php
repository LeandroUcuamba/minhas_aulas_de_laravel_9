<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventController extends Controller
{
    
    public function index(){

        $nome = "Leandro";
        $idade = 23;
    
        $arr=[1,2,3,4,5];
        $nomes=['Leandro','Tiago','Mateus','Andre'];
    
        return view(
            'welcome',
            [
                'nome' => $nome,
                'idade2' => $idade,
                'profissao' => "programador",
                'arr' => $arr,
                'nomes' => $nomes
            ]); //esse é o nome do arquivo blade;

    }

    public function create(){
        return view("events/create");
    }


}
