<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\modelReserva;

class reservaController extends Controller
{
    public function index(){
        $dados = modelReserva::all();
        return view('paginas.reserva')->With('dados',$dados);
    }

    public function store(Request $request){
        $nomeReserva = $request->input('nomeReserva');
        $enderecoReserva = $request->input('enderecoReserva');
        $dataInicio = $request->input('dataInicio');
        $dataFinal = $request->input('dataFinal');
        $horario = $request->input('horario');

        $model = new modelReserva();
        $model->nomeReserva = $nomeReserva;
        $model->enderecoReserva = $enderecoReserva;
        $model->dataInicio = $dataInicio;
        $model->dataFinal = $dataFinal;
        $model->horario = $horario;

        $model->save();
        return redirect('/reserva');
    }
}
