<?php

namespace App\Http\Controllers;

use App\Http\Requests\ReservationRequest;

class ReservationController extends Controller
{
    public function goToReservation() {
        return view('reservations');
    }

    public function reserve(ReservationRequest $request) {
        return view('tablescontrol');
    }
}
