<?php

namespace App\Http\Controllers;

class LoginController extends Controller
{
    public function login() {
        //fazer validacao do login
        return view('home');
    }

    public function logout() {
        //encerrar sessao
        return view('login');
    }
}
