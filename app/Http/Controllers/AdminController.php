<?php

namespace App\Http\Controllers;
use App\Models\Admin;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard()
    {
        return view('admin.dashboard');
    }

    public function adminlist(){
        return view('admin.layouts.admin_list');

    }

    public function adminform(){
        return view('admin.layouts.admin_form');
    }
    

    
        public function store(Request $request){
               admin::create([ 
                'name'=>$request->name,
                'nid'=>$request->nid,
                'address'=>$request->address,
                'email'=>$request->email,
                'phone_number'=>$request->phone_number,
    
            
    
         ]);

    return redirect()->back();
    }
    
}
