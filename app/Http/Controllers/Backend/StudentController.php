<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Student;
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
            'email' => $request->email,
            'phone_number'=>$request->phone_number,
            'address'=>$request->address,
        ]);
        return redirect()->back(); 
    }

}
