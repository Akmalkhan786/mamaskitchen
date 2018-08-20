<?php

namespace App\Http\Controllers\Admin;

use App\Reservation;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ReservationController extends Controller
{
    //
    public function index(){
        $reservations = Reservation::paginate(10);
        return view('admin.reservation.index', compact('reservations'));
    }
}
