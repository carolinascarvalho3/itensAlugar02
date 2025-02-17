<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\modelSite;

class cadastroController extends Controllers
{
    public function index(){
        $dados = modelSite::all();//todos os dados da tabela
        return view('paginas.cadastrar')->With('dados',$dados);
    }//fim do método - retornar dados

    public function store(Request $request){
        $nome = $request->input('nome');
        $email = $request->input('email');
        $senha = $request->input('senha');
        $endereco = $request->input('endereco');
        $dataNascimento = $request->input('dataNascimento');
        // inserindo dados na tabela
        $model = new modelSite();
        $model->nome = $nome;
        $model->email = $email;
        $model->senha = $senha;
        $model->endereco = $endereco;
        $model->dataNascimento = $dataNascimento; 

        $model->save();//Armazenar no banco de dados
        return redirect('/cadastro');
    }//fim do método do cadastro

    //public function consultar(){
        //$ids = modelSite::all();
        //return view('paginas.consultar', compact('ids'));
    //}//fim do método

    public function editar($id){
        $dado = modelSite::findOrFail($id);
        return view('paginas.editar', compact('dado'));
    }//fim do método
    
    public function atualizar(Request $request, $id){
        modelSite::where('id', $id)->update($request->all());
        redirec('/consultar');
    }//fim do método 

    public function excluir(Request $request, $id){
        modelSite::where('id', $id)->delete($request->all());
        return redirect('/consultar');
    }

}//todas as operações do banco de dados