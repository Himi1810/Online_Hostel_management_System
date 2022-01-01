<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Userrequest;
use Illuminate\Http\Request;

class UserprofileController extends Controller
{
    public function userprofile_list(){
        $usertable = Userrequest::all();
        //dd($usertable)
        return view('admin.layouts.userprofile_list',compact('usertable'));
    }

    public function userprofile(){
        return view('website.pages.userprofile');
    }

    public function store(Request $request){

        Userrequest::create([

            'full_name'=>$request->name,
            'email'=>$request->email,
            'date'=>$request->date,
            'phone_number'=>$request->phone_number,
            'description'=>$request->send_request



        ]);
        return redirect()->route('website.home');
    }

}
