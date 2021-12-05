<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Visitor;

use Illuminate\Http\Request;

class VisitorController extends Controller
{
    public function visitorlist(){
        return view('admin.layouts.visitor_list');
    }

    public function visitorform(){
        return view('admin.layouts.visitor_form');
    }

    public function store(Request $request){
        Visitor::create([
            'name'=>$request->name,
            'phone_number'=>$request->phone_number,

            'address'=>$request->address,
            

        

        ]);
        return redirect()->back(); 
}
}
