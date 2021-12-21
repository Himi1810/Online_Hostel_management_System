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
         // dd($hostels);
        return view('admin.layouts.hostel_information_list',compact('hostel'));
    }
    public function hostel_infoform()
    {
        return view('admin.layouts.hostel_information_form');
    }
    public function store(Request $request)
    {
        // dd($request->all());
        Hostel::create([
            'number_of_rooms'=>$request->number_of_rooms,
            'hostel_location'=>$request->hostel_location,
            'hostel_type'=>$request->hostel_type,
            'Total_rooms'=>$request->total_rooms,
            'name_of_the_hostel'=>$request->name_of_the_hostel,


        ]);
        return redirect()->back(); 

    }


    public function hostel_information_view($id){
        $hostel=Hostel::find($id);

        return view('admin.layouts.hostel_information_view',compact('hostel'));
    }

    public function hostel_information_delete($id){
        $hostel=Hostel::find($id);
        
            //  dd($hostel);
              if($hostel){
                      $hostel->delete();

                      
             return redirect()->back();
}
    }
}
