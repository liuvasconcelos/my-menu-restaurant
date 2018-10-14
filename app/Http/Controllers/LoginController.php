<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;

class LoginController extends Controller
{
    public function login(LoginRequest $request) {
        return view('home');
    }

    public function goToHome() {
        return view('home');
    }

    public function logout() {
        return view('login');
    }
}
