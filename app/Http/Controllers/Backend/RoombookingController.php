<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Roombooking;
use Illuminate\Http\Request;

class RoombookingController extends Controller
{
    public function roombookinglist(){
        $roombookings = Roombooking::all();
        // dd($roombookings);
        return view('admin.layouts.roombooking_list',compact('roombookings'));
    }

    public function roombookingform(){
        return view('admin.layouts.roombooking_form');
    }

    public function store(Request $request){
        Roombooking::create([
            'room_id'=>$request->room_id,
            'student_id'=>$request->student_id,

            'booking_date'=>$request->booking_date,
            'room_status'=>$request->room_status,
            'room_fee'=>$request->room_fee,


        ]);
        return redirect()->back(); 
    }
}
