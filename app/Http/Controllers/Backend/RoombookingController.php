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
            'seat_id'=>$request->seat_id,
            'student_id'=>$request->student_id,
            'booking_date'=>$request->booking_date,
            'room_status'=>$request->room_status,
            'room_fee'=>$request->room_fee,


        ]);
        return redirect()->back(); 
    }

    public function roombooking_view($id){
        $roombooking=Roombooking::find($id);

        return view('admin.layouts.roombooking_view',compact('roombooking'));
    }

    public function roombooking_delete($id){
        $roombooking=Roombooking::find($id);
            // dd($roombooking);
              if($roombooking){
                      $roombooking->delete();

                      
             return redirect()->back();
}
    }

    public function roombooking_edit($id){
     
        // $roombooking=Roombooking::all();
        $roombooking=Roombooking::find($id);
        // dd($roombooking);
        if($roombooking){

            return view('admin.layouts.roombooking_update',compact('roombooking'));
        }
}

public function roombooking_update($id,Request $request){
     
    
    $roombooking=Roombooking::find($id);
    // dd($roombooking);
    if($roombooking){
        $roombooking->update([

            'seat_id'=>$request->seat_id,
            'student_id'=>$request->student_id,
            'booking_date'=>$request->booking_date,
            'room_status'=>$request->room_status,
            'room_fee'=>$request->room_fee,

        ]);
        return redirect()->route('admin.roombooking'); 
       
    }

}
}
