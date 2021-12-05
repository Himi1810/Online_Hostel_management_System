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
            'name'=>$request->name,
            'nid'=>$request->nid,

            'phone_number'=>$request->phone_number,

        ]);
        return redirect()->back(); 
}
}