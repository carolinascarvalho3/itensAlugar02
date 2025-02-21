<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\modelIten;

class itenController extends Controller
{
    public function index(){
        $dados = modelIten::all();
        return view('paginas.iten')->With('dados',$dados);
    }

    public function store(Request $request){
        $nomeProduto = $request//Falta o resto burro
    }
}
