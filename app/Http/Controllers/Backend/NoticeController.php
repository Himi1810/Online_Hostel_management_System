<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Notice;

use Illuminate\Http\Request;

class NoticeController extends Controller
{
    public function noticelist(){
        return view('admin.layouts.notice_list');
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

}
