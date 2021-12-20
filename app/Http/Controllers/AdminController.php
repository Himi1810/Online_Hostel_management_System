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
            
            // dd($request->all());
        $filename='';
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = date('Ymdhms').'.'.$file->getClientOriginalExtension();
            $file->storeAs('/uploads/admin',$filename);
        }
            
               admin::create([ 
                'name'=>$request->name,
                'nid'=>$request->nid,
                'address'=>$request->address,
                'email'=>$request->email,
                'phone_number'=>$request->phone_number,
                'image'=>$filename,
    
            
    
         ]);

    return redirect()->back();
    }

    public function admin_view($id){
        $admin=Admin::find($id);

        return view('admin.layouts.admin_view',compact('admin'));
    }

    public function admin_delete($id){
        $admin=Admin::find($id);
            // dd($student);
              if($admin){
                      $admin->delete();

                      
             return redirect()->back();
}
    }
    
        }
