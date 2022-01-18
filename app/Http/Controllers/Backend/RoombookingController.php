<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Roombooking;
use App\Models\User;
use App\Models\Manageroom;

use Illuminate\Http\Request;

class RoombookingController extends Controller
{
    public function roombookinglist(){
        $roombookings = Roombooking::all();
        // dd($roombookings);
        return view('admin.layouts.roombooking_list',compact('roombookings'));
    }

    public function roombookingform(){

        $students = User::where('role','student')->orderBy('id','desc')->get();
        $managerooms = Manageroom::all();
        return view('admin.layouts.roombooking_form',compact('students','managerooms'));
    }

    public function store(Request $request){
        $room = Manageroom::where('id',$request->seat_id)->first();

        $booking = Roombooking::where('booking_date',$request->booking_date)->first();

        if($booking){
            return redirect()->back()->with('failure','room already booked');  
        }
        if( $room->allocative == 'YES'){
            Roombooking::create([
                'seat_id'=>$request->seat_id,
                'student_id'=>$request->student_id,
                'booking_date'=>$request->booking_date,
                'room_status'=>$room->allocative,
                'room_fee'=>$room->room_fee,
                'status' => 'approved'
            ]);

            return redirect()->back()->with('success','room booked');
        }else{
            return redirect()->back()->with('failure','room already booked');
        }
       
        
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
