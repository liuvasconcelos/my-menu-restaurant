<?php

namespace App\Http\Controllers;

class RegisterController extends Controller
{
    public function goToChooseRegister() {
        return view('registeritens');
    }
    public function goToRegisterAItem() {
        return view('registerperitens');
    }
}
