<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class loginController extends Controller
{
    public function store(Request $request){
        $request->validate([
            'email' => 'required/email',
            'senha' => 'required'
        ], [
            'email.required' => 'Esse campo de email é obrigatório',
            'email.email' => 'Esse campo tem que ter um email válido',
            'senha.required' => 'Esse campo de senha é obrigatório',
            'senha.min' => 'Esse campo tem que ter no mínimo :min caracteres'
        ]);

        $credentials = $request->only('email', 'senha');
        $authenticated = Auth::attempt($credentials);

        if (!$authenticated) {
            return redirect()->route('entrar.index')->withErrors(['error' => 'email or senha invalid']);
        }

        return redirect()->route('login.index')->with('success', 'Logged in');
    }
}
