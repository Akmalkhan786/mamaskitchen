<?php

namespace App\Http\Controllers\Admin;

use App\Reservation;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ReservationController extends Controller
{
    //
    public function index(){
        $reservations = Reservation::paginate(10);
        return view('admin.reservation.index', compact('reservations'));
    }
    public function status(Request $request,$id){
        $reservation = Reservation::findOrFail($id);
        if ($request->status == false){
            $reservation->status = true;
        } else {
            $reservation->status = false;
        }
        $reservation->save();
        Toastr::success('Reservation successfully confirmed', 'Success', ["positionClass" => "toast-top-right"]);
        return redirect()->back()->with('success', 'Confirmed');
    }
    public function destroy($id){
        Reservation::findOrFail($id)->delete();
        return redirect()->back()->with('success', 'Deleted');
    }
}
