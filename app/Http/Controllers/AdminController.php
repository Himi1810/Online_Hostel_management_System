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
        $admins = Admin::all();
        // dd($admins);
        return view('admin.layouts.admin_list',compact('admins'));

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
