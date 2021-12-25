<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{

    public function dashboard()
    {
        return view('admin.dashboard');
    }
    public function login()
    {
        return view('admin.layouts.admin_form');
    }
    public function dologin(Request $req){
        // dd($req->all());
        // // dd($req->all());
        $userInfo=$req->except('_token');
        if(Auth::attempt($userInfo)){
            return redirect()->route('dashboard');
        }
        return redirect()->back();
      
    }

    public function logout(){
        return view('admin.layouts.admin_form');
    }
}
