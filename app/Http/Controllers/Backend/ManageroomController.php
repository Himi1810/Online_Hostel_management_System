<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Manageroom;
use Illuminate\Http\Request;

class ManageroomController extends Controller
{
    public function manageroomlist(){
        $managerooms = Manageroom::all();
        // dd($managerooms);
       
        return view('admin.layouts.manageroom_list',compact('managerooms'));
    }
    public function manageroomform(){
        return view('admin.layouts.manageroom_form');
    }

    public function store(Request $request){
        Manageroom::create([
            'student_id'=>$request->student_id,
            'room_name'=>$request->room_name,
            'room_type'=>$request->room_type,
            'room_fee'=>$request->room_fee,
            'allocative'=>$request->allocative,
           

            

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
        'student_id'=>$request->student_id,
        'room_name'=>$request->room_name,
        'room_type'=>$request->room_type,
        'room_fee'=>$request->room_fee,
         'allocative'=>$request->allocative,

    ]);
    return redirect()->route('admin.manageroom'); 
   
}

}
}