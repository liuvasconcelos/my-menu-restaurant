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
}
