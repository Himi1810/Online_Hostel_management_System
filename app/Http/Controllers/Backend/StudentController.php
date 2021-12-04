<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Model\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function studentlist(){
        return view('admin.layouts.student_list');
    }

    public function studentform(){
        return view('admin.layouts.student_form');
    }

    public function store(Request $request){
        Student::create([
            'name'=>$request->name,
            'nid'=>$request->nid,

            'phone_number'=>$request->phone_number,
            'address'=>$request->address,

        ]);
        return redirect()->back(); 
    }

}
