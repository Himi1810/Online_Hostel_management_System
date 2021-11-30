<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Staff;
use Illuminate\Http\Request;

class StaffController extends Controller
{
    public function staff(){
        return view('admin.layouts.staff');
    }

    public function staffform(){
        return view('admin.layouts.staff_form');
    }

    public function store(Request $request){
        staff::create([
            'name'=>$request->name,
            'id'=>$request->id,
            'nid'=>$request->nid,
            'address'=>$request->address,
            'phone_number'=>$request->phone_number,
            'email'=>$request->email,
        ]);
        return redirect()->back();
    }
}
