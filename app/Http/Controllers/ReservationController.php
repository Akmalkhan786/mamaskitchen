<?php

namespace App\Http\Controllers;

use App\Reservation;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
    //
   public function reserve(Request $request){
       $this->validate($request, [
            'name' => 'required',
            'phone' => 'required',
            'email' => 'required',
            'date_and_time' => 'required'
       ]);
       $reservation = new Reservation();
       $reservation->name = $request->input('name');
       $reservation->phone = $request->input('phone');
       $reservation->email = $request->input('email');
       $reservation->date_and_time = $request->input('date_and_time');
       $reservation->message = $request->input('message');
       $reservation->status = false;
       $reservation->save();
       Toastr::success('Reservation request sent successfully. we will confirm to you shortly', 'Success', ["positionClass" => "toast-top-right"]);
       return redirect()->back();
   }
}