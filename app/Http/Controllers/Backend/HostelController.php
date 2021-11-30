<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Hostel;
use Illuminate\Http\Request;

class HostelController extends Controller
{
    public function hostel_info()
    {
        $host=Hostel::all();
        return view('admin.layouts.hostel_information',compact('host'));
    }
    public function hostel()
    {
        return view('admin.partials.hostel');
    }
    public function store(Request $request)
    {
        Hostel::create([
            'email'=>$request->email,
            'password'=>$request->password,

        ]);
        return redirect()->back(); 

    }
}
