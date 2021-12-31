<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Notice;

use Illuminate\Http\Request;

class NoticeController extends Controller
{
    public function noticelist(){
        $notices = Notice::all();
        // dd($notices);
        return view('admin.layouts.notice_list',compact('notices'));
    }

    public function noticeform(){
        return view('admin.layouts.notice_form');
    }

    public function store(Request $request){
        Notice::create([
            'notice_date'=>$request->notice_date,
            'notice_title'=>$request->notice_title,

            'notice_description'=>$request->notice_description,
            

        ]);
        return redirect()->back(); 
    }

    public function notice_view($id){
        $notice=Notice::find($id);
    
        return view('admin.layouts.notice_view',compact('notice'));
    }
    
    public function notice_delete($id){
        $notice=Notice::find($id);
        
            //  dd($notice);
              if($notice){
                      $notice->delete();
    
                      
             return redirect()->back();
    }
    }
    
    public function notice_edit($id){
         
        // $notice=Notice::all();
        $notice=Notice::find($id);
        // dd($notice);
        if($notice){
    
            return view('admin.layouts.notice_update',compact('notice'));
        }
    }
    
    public function notice_update($id,Request $request){
     
    
    $notice=Notice::find($id);
    // dd($notice);
    if($notice){
        $notice->update([
    
            'notice_date'=>$request->notice_date,
            'notice_title'=>$request->notice_title,
            'notice_description'=>$request->notice_description,
            
    
    
        ]);
        return redirect()->route('admin.notice'); 
       
    }
    
    }

}
