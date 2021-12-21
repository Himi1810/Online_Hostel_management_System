<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Sendrequest;
use Illuminate\Http\Request;

class RequestController extends Controller
{
    public function request()
    {
        return view('website.pages.request_form');
    }

    public function request_list()
    {
        $request = Request::all();
    
        return view('admin.layouts.request_list',compact('request'));
    }

    public function requestform(){
        return view('website.pages.request_form');
    }

    public function store(Request $request){
        dd("request");
        Request::create([

           

            'full_name'=>$request->full_name,
            'email'=>$request->email,
            'address'=>$request->address,
            'room_type'=>$request->room_type,
            'date'=>$request->date,
            'phone_number'=>$request->phone_number,
            'send_request'=>$request->send_request,




        

        ]);
        return redirect()->back(); 
}
}

