<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\modelSite;

class siteController extends Controller
{
    public function index(){
        $dados = modelSite::all();//todos os dados da tabela
        return view('paginas.cadastrar')->With('dado',$dados);
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

    public function editar($id){
        $dado = modelSite::findOrFail($id);
        return view('paginas.editar', compact('dado'));
    }//fim do método
    
    public function atualizar(Request $request, $id){
        modelSite::where('id', $id)->update($request->all());
        return redirec('/consultar');
    }//fim do método 

    public function excluir(Request $request, $id){
        modelSite::where('id', $id)->delete($request->all());
        return redirect('/consultar');
    }

}//todas as operações do banco de dados