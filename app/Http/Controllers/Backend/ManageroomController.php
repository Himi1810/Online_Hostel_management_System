<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Manageroom;
use App\Models\Hostel;

use Illuminate\Http\Request;

class ManageroomController extends Controller
{
    public function manageroomlist(){
        $managerooms = Manageroom::orderBy('id','desc')->get();
        // dd($managerooms);
       
        return view('admin.layouts.manageroom_list',compact('managerooms'));
    }
    public function manageroomform(){

        $hostels = Hostel::all();
       
        return view('admin.layouts.manageroom_form',compact('hostels'));
    }

    public function store(Request $request){

        // dd($request->all());
        $filename='';
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = date('Ymdhms').'.'.$file->getClientOriginalExtension();
            $file->storeAs('/uploads/manageroom',$filename);
            
        }

        Manageroom::create([
            'hostel_id'=>$request->hostel_id,
            'room_name'=>$request->room_name,
            'room_type'=>$request->room_type,
            'room_fee'=>$request->room_fee,
            'allocative'=>$request->allocative,
            'image'=>$filename
           

            

        ]);
        return redirect()->back(); 
}



public function manageroom_view($id){
    $manageroom=Manageroom::find($id);

    return view('admin.layouts.manageroom_view',compact('manageroom'));
}

public function manageroom_delete($id){
    $manageroom=Manageroom::find($id);
        // dd($manageroom);
          if($manageroom){
                  $manageroom->delete();

                  
         return redirect()->back();
}
}

public function manageroom_edit($id){
     
    // $manageroom=Manageroom::all();
    $manageroom=Manageroom::find($id);
    // dd($manageroom);
    if($manageroom){

        return view('admin.layouts.manageroom_update',compact('manageroom'));
    }
}

public function manageroom_update($id,Request $request){
 

$manageroom=Manageroom::find($id);
// dd($manageroom);
if($manageroom){
    $manageroom->update([
        'student_id'=>$request->hostel_id,
        'room_name'=>$request->room_name,
        'room_type'=>$request->room_type,
        'room_fee'=>$request->room_fee,
         'allocative'=>$request->allocative,

    ]);
    return redirect()->route('admin.manageroom'); 
   
}

}
}