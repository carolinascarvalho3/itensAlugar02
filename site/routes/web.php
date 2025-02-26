<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controller\siteController;
use App\Http\Controller\reservaController;
use App\Http\Controller\itenController;
use App\Http\Controller\loginController;

Route::get('/', function () {
    return view('paginas/index');
});


Route::get('/cadastrar', function(){
    return view('paginas/cadastrar');
});

Route::get('/perfil', function(){
    return view('paginas/perfil');
});

Route::get('/consultar', function(){
    return view('paginas/consult');
});

Route::get('/verItens', function(){
    return view('paginas/verItens');
});

Route::get('/editar', function(){
    return view('paginas/editar');
});

Route::get('/editarIten', function(){
    return view('paginas/editarIten');
});

Route::get('/iten', function(){
    return view('paginas/iten');
});

Route::get('/reserva', function(){
    return view('paginas/reserva');
});

Route::get('/entrar', function(){
    return view('paginas/entrar');
});


Route::get('/cadastrar/salvar',[App\Http\Controllers\siteController::class, 'store']);

Route::get('/perfil',[App\Http\Controllers\siteController::class, 'perfil']);

Route::get('/consultar',[App\Http\Controllers\siteController::class, 'consultar']);

Route::get('/verItens',[App\Http\Controllers\itenController::class, 'verItens']);

Route::get('/editar/{id}',[App\Http\Controllers\siteController::class, 'editar']);

Route::get('/entrar',[App\Http\Controllers\loginController::class, 'entrar']);

Route::get('/editarIten/{id}',[App\Http\Controllers\itenController::class, 'editarIten']);

Route::get('/atualizar/{id}',[App\Http\Controllers\siteController::class, 'atualizar']);

Route::get('/atualizarIten/{id}',[App\Http\Controllers\itenController::class, 'atualizarIten']);

Route::get('/excluir/{id}',[App\Http\Controllers\siteController::class, 'excluir']);

Route::get('/excluirIten/{id}',[App\Http\Controllers\itenController::class, 'excluirIten']);

Route::get('/iten/salvar',[App\Http\Controllers\itenController::class, 'store']);

Route::get('/reserva/salvar',[App\Http\Controllers\reservaController::class, 'store']);
