<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterMenuRequest;
use App\Http\Requests\RegisterRequest;
use App\Models\itens\Item;
use App\Models\itens\Menu;

class RegisterController extends Controller
{
    public function goToChooseRegister() {
        return view('registeritens');
    }

    public function goToRegisterAItem() {
        return view('registerperitens');
    }

    public function register(RegisterRequest $request) {
        Item::create([
            'name'        => $request->name,
            'description' => $request->description,
            'type'        => 1,
            'price'       => $request->price,
        ]);
        return view('registeritens');
    }

    public function goToRegisterMenu() {
        $itens = Item::query()->get();

        $entries     = $itens->where('type', 1);
        $mainCourses = $itens->where('type', 2);
        $desserts    = $itens->where('type', 3);

        if(count($entries) == 0 || count($mainCourses) == 0 || count($desserts) == 0 ) {
            return redirect()->back()->withErrors('Não existe itens suficientes cadastrados para a adição de um menu.');
        } else {
            return view('registermenu')->with(['entries'=> $entries, 'mainCourses'=>$mainCourses, 'desserts'=>$desserts]);
        }

    }

    public function registerMenu(RegisterMenuRequest $request) {
        Menu::create([
            'entry'   => $request->entry,
            'main'    => $request->main,
            'dessert' => $request->dessert,
            'price'   => $request->price,
        ]);

        return view('registeritens');
    }

}
