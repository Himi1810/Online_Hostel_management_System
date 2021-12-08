<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Manageroom;
use Illuminate\Http\Request;

class ManageroomController extends Controller
{
    public function manageroomlist(){
        return view('admin.layouts.manageroom_list');
    }
    public function manageroomform(){
        return view('admin.layouts.manageroom_form');
    }

    public function store(Request $request){
        Manageroom::create([
            'room_name'=>$request->room_name,
            'room_type'=>$request->room_type,
            'room_fee'=>$request->room_fee,
            'room_status'=>$request->room_status,


            

        ]);
        return redirect()->back(); 
}
}