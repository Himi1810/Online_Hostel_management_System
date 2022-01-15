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
        //  dd($request->all());
        $filename='';
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = date('Ymdhms').'.'.$file->getClientOriginalExtension();
            $file->storeAs('/uploads/hostel',$filename);
        }

        Hostel::create([
            'name_of_the_hostel'=>$request->name_of_the_hostel,
            'hostel_location'=>$request->hostel_location,
            'hostel_type'=>$request->hostel_type,
            'Total_rooms'=>$request->total_rooms,
            'image'=>$filename,


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

    public function hostel_information_edit($id){
     
        // $hostel=Hostel::all();
        $hostel=hostel::find($id);
        // dd($hostel);
        if($hostel){

            return view('admin.layouts.hostel_information_update',compact('hostel'));
        }
}

public function hostel_information_update($id,Request $request){
     
    
    $hostel=Hostel::find($id);
    // dd($hostel);
    if($hostel){
        $hostel->update([

            'name_of_the_hostel'=>$request->name_of_the_hostel,
            'hostel_location'=>$request->hostel_location,
            'hostel_type'=>$request->hostel_type,
            'Total_rooms'=>$request->total_rooms,

        ]);
        return redirect()->route('admin.hostel_informationlist'); 
       
    }

}
}
