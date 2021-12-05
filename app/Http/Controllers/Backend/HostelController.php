<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Hostel;
use Illuminate\Http\Request;

class HostelController extends Controller
{
    public function hostel_infolist()
    {
        $hostel = Hostel::all();
        return view('admin.layouts.hostel_information_list',compact('hostel'));
    }
    public function hostel_infoform()
    {
        return view('admin.layouts.hostel_information_form');
    }
    public function store(Request $request)
    {
        Hostel::create([
            'number_of_rooms'=>$request->number_of_rooms,
            'hostel_location'=>$request->hostel_location,
            'hostel_type'=>$request->hostel_type,

            'hostel_name'=>$request->hostel_name,


        ]);
        return redirect()->back(); 

    }
}
