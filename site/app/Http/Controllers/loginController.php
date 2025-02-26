<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\modelSite;
use App\Http\Controllers\siteController;

class loginController extends Controller
{
    public function index(){
        $dados = modelSite::all();//todos os dados da tabela
        return view('paginas.entrar')->With('dados',$dados);
    }//fim do método - retornar dados

    public function entrar(){
        $ids = modelSite::all();
        return view('paginas.entrar', compact('ids'));
    }

    public function store(Request $request){
        $emailLog = $request->input('emailLog');
        $senhaLog = $request->input('senhaLog');
        
    }//fim do método do cadastro

}