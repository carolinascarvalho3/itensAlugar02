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
        $nomeProduto = $request->input('nomeProduto');
        $anuncio = $request->input('anuncio');
        $preco = $request->input('preco');

        $model = new modelIten();
        $model->nomeProduto = $nomeProduto;
        $model->anuncio = $anuncio;
        $model->preco = $preco;

        $model->save();
        return redirect('/iten');
    }

    public function verItens()
    {
        $ids = modelIten::all();
        return view('paginas.verItens', compact('ids'));
    }//fim do método

    public function perfil()
    {
        $ids = modelIten::all();
        return view('paginas.perfil', compact('ids'));
    }//fim do método

    public function excluirIten(Request $request, $id){
        modelIten::where('id', $id)->delete($request->all());
        return redirect('/verItens');
    }

    public function editarIten($id){
        $dado = modelIten::findOrFail($id);
        return view('paginas.editarIten', compact('dado'));
    }//fim do método

    public function atualizarIten(Request $request, $id){
        modelIten::where('id', $id)->update($request->all());
        return redirect('/verItens');
    }//fim do método 

    
}
