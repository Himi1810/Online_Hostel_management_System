<?php

namespace App\Http\Controllers;
use App\Model\admin;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function hostel()
    {
        return view('admin.master');
    }
    public function adminpart(){
        return view('admin.layouts.admin');
    }
    

    
        // public function store(Request $request){
        //         admin::create([ 
        //     'name'=>$request->name,
        //     'id'=>$request->id,
        //     'phn_no'=>$request->phn_no,
        //     'address'=>$request->address,
        //     'email'=>$request->email 
        // ]);
        // return redirect()->back();
    }
    

