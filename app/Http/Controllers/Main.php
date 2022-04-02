<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;


use Illuminate\Http\Request;
use App\Models\Candidatos;
use App\Models\Concursos;
use App\Models\User;
use App\Models\Vencedores;
USE App\Models\Votos;

class Main extends Controller
{
    public function home(){
            return view('produtos.tamplates');
          
           
    }
}
