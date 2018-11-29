<?php

namespace App\Http\Controllers;

use App\Models\Table;

class TablesControlController extends Controller
{
    public function goToTablesControl()
    {
        $tables = Table::query()->get();

        return view('tablescontrol')->with(['tables' => $tables]);
    }

    public function addOrder($id)
    {

        $table = Table::query();
        $currentTable = $table->where('id', $id);

        switch ($currentTable->first()->status) {
            case('L'):
                return redirect()->back()->with([
                    'message' => 'Mesa livre !'
                ]);
                break;
            case('O'):
                return redirect()->back()->withErrors('Mesa Ocupada !');
                break;
            case('R'):
                return redirect()->back()->with([
                    'alert' => 'Mesa Reservada !']);
                break;
            default:
                return redirect()->back()->withErrors('Falha ao carregar !');
                break;

        }

    }
}
