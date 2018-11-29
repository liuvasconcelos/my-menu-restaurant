<?php

namespace App\Http\Controllers;

use App\Http\Requests\ReservationRequest;
use App\Models\Table;

class ReservationController extends Controller
{
    public function goToReservation() {
        $free = Table::query()->get();
        $tables = $free->where('status', 'L');
        return view('reservations')->with(['tables' => $tables]);
    }

    public function reserve(ReservationRequest $request) {
        $tableId = $request->table;

        Table::find($tableId)->update(['status' => 'R', 'style' => 'btn bann_capt bn__1']);
        $tables = Table::query()->get();

        return view('tablescontrol')->with(['tables' => $tables]);
    }
}
