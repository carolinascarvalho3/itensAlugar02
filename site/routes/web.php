<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controller\siteController;

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

Route::get('/iten', function(){
    return view('paginas/iten');
});

Route::get('/reserva', function(){
    return view('paginas/reserva');
});


Route::get('/cadastrar/salvar',[App\Http\Controllers\siteController::class, 'store']);

Route::get('/consultar',[App\Http\Controllers\siteController::class, 'consultar']);

Route::get('/editar/{id}',[App\Http\Controllers\siteController::class, 'editar']);

Route::get('/atualizar/{id}',[App\Http\Controllers\siteController::class, 'atualizar']);

Route::get('/excluir/{id}',[App\Http\Controllers\siteController::class, 'excluir']);

Route::get('/iten/salvar',[App\Http\Controllers\siteController::class, 'iten']);

Route::get('/reserva/salvar',[App\Http\Controllers\siteController::class, 'reserva']);
