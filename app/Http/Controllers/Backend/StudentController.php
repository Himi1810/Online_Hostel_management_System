<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function studentlist(){
        $students = student::all();
        // dd($students);
        return view('admin.layouts.student_list',compact('students'));
    }

    public function studentform(){
        return view('admin.layouts.student_form');
    }

    public function store(Request $request){
        // dd($request->all());
        $filename='';
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = date('Ymdhms').'.'.$file->getClientOriginalExtension();
            $file->storeAs('/uploads/student',$filename);
            
        }
        Student::create([
            'name'=>$request->name,
            'nid'=>$request->nid,
            'email' => $request->email,
            'phone_number'=>$request->phone_number,
            'address'=>$request->address,
            'image'=>$filename
        ]);
        return redirect()->back(); 
    }

    public function student_view($id){
        $student=Student::find($id);

        return view('admin.layouts.student_view',compact('student'));
    }

    public function student_delete($id){
        $student=Student::find($id);
            // dd($student);
              if($student){
                      $student->delete();

                      
             return redirect()->back();
}
    }
}

