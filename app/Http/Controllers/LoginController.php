<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;

class LoginController extends Controller
{
    public function login(LoginRequest $request) {

        if( $request->login == 'logincerto' && $request->password == '123456') {
            return view('home');
        } else {
            return view('login')->withErrors('Login ou senha incorretos.');
        }

    }

    public function goToHome() {
        return view('home');
    }

    public function logout() {
        return view('login');
    }
}
