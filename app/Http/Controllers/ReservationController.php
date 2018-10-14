<?php

namespace App\Http\Controllers;

class ReservationController extends Controller
{
    public function goToReservation() {
        return view('reservations');
    }
}
