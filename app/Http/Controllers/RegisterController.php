<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterRequest;

class RegisterController extends Controller
{
    public function goToChooseRegister() {
        return view('registeritens');
    }

    public function goToRegisterAItem() {
        return view('registerperitens');
    }

    public function register(RegisterRequest $request) {
        return view('registeritens');
    }

    public function goToRegisterMenu() {
        //checar se tem pelo menos 1 de cada cadastrado.
        //se sim -> abre tela
        //se nao -> mostra aviso


        return view('registermenu');
    }

    public function registerMenu(RegisterRequest $request) {
        return view('registeritens');
    }

}
