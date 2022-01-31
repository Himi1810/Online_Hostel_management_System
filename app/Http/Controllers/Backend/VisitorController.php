<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Visitor;

use Illuminate\Http\Request;

class VisitorController extends Controller
{
    public function visitorlist(){
        $visitors = Visitor::all();
        // dd($visitors);
        return view('admin.layouts.visitor_list',compact('visitors'));
    }

    public function visitorform(){
        return view('admin.layouts.visitor_form');
    }

    public function store(Request $request){
        // dd($request->all());
        $filename='';
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = date('Ymdhms').'.'.$file->getClientOriginalExtension();
            $file->storeAs('/uploads/visitor',$filename);
        }
        Visitor::create([
            'name'=>$request->name,
            'address'=>$request->address,
            'phone_number'=>$request->phone_number,
            
            'nid'=>$request->nid,
            
            'image'=>$filename,

        

        ]);
        return redirect()->back(); 
}

public function visitor_view($id){
    $visitor=Visitor::find($id);

    return view('admin.layouts.visitor_view',compact('visitor'));
}

public function visitor_delete($id){
    $visitor=Visitor::find($id);
    
        //  dd($visitor);
          if($visitor){
                  $visitor->delete();

                  
         return redirect()->back();
}
}

public function visitor_edit($id){
     
    // $visitor=Visitor::all();
    $visitor=visitor::find($id);
    // dd($visitor);
    if($visitor){

        return view('admin.layouts.visitor_update',compact('visitor'));
    }
}

public function visitor_update($id,Request $request){
 

$visitor=Visitor::find($id);
// dd($Visitor);
if($visitor){
    $visitor->update([

        'name'=>$request->name,
            'address'=>$request->address,
            'phone_number'=>$request->phone_number,
            
            'nid'=>$request->nid,
            
            // 'image'=>$filename,

       

    ]);
    return redirect()->route('admin.visitor'); 
   
}

}

}
