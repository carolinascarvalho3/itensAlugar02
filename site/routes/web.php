<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('paginas/index');
});


Route::get('/cadastrar', function(){
    return view('paginas/cadastrar');
});

Route::get('/consultar', function(){
    return view('paginas/consultar');
});

Route::get('/editar', function(){
    return view('paginas/editar');
});

Route::get('/cadastrar/salvar',[App\Http\Controllers\siteController::class, 'store']);

Route::get('/consultar',[App\Http\Controllers\registrarAtividadeController::class, 'consultar']);

Route::get('/editar/{id}',[App\Http\Controllers\siteController::class, 'editar']);

Route::get('/atualizar/{id}',[App\Http\Controllers\siteController::class, 'atualizar']);

Route::get('/excluir/{id}',[App\Http\Controllers\siteController::class, 'excluir']);
