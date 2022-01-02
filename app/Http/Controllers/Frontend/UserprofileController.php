<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Userrequest;
use Illuminate\Http\Request;

class UserprofileController extends Controller
{
    public function userprofile_list(){
        $usertable = Userrequest::all();
        //dd($usertable)
        return view('admin.layouts.userprofile_list',compact('usertable'));
    }

    public function userprofile(){
        return view('website.pages.userprofile');
    }

    public function store(Request $request){

        Userrequest::create([

            'student_id'=>$request->student_id,
            'seat_id'=>$request->seat_id,
            'booking_date'=>$request->date,
            'email'=>$request->email,
            'description'=>$request->send_request,
           



        ]);
        return redirect()->route('website.home');
    }

    public function userprofile_view($id){
        $usertable=Userrequest::find($id);

        return view('admin.layouts.userprofile_view',compact('usertable'));
    }



    
    

    public function userprofile_accept($id){
    //  dd($id);
        // $usertable=Userrequest::all();
        $usertable=Userrequest::find($id);
        //  dd($usertable);
        if($usertable){
            $usertable->update([
                'status'=>'approve'
            ]);
            
            
        }
        return redirect()->back();
}

public function userprofile_reject($id){
    // dd($id);
    $usertable=Userrequest::find($id);
    
        //  dd($usertable);
          if($usertable){
                  $usertable->update([
                    'status'=>'rejected'
                  ]);

                  
         return redirect()->back();
}
}
public function userprofile_update($id,Request $request){
     
    
    $usertable=Userrequest::find($id);
    // dd($usertable);
    if($usertable){
        $usertable->update([

            'student_id'=>$request->student_id,
            'seat_id'=>$request->seat_id,
            'booking_date'=>$request->date,
            'email'=>$request->email,
            'description'=>$request->send_request,
            'status'=>$request->status


        ]);
        return redirect()->route('admin.roombooking_list'); 
       
    }
}
}



