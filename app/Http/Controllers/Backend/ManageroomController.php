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
            'room_name'=>$request->room_name,
            'room_type'=>$request->room_type,
            'room_fee'=>$request->room_fee,
           

            

        ]);
        return redirect()->back(); 
}
}