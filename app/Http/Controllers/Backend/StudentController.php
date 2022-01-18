<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function studentlist(){
        $students = User::where('role','student')->orderBy('id','desc')->get();
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
        User::create([
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
        $student=User::find($id);

        return view('admin.layouts.student_view',compact('student'));
    }

    public function student_delete($id){
        $student=User::find($id);
            // dd($student);
              if($student){
                      $student->delete();

                      
             return redirect()->back();
}
    }
    public function student_edit($id){
     
        // $student=Student::all();
        $student=User::find($id);
        // dd($student);
        if($student){

            return view('admin.layouts.student_update',compact('student'));
        }
}

public function student_update($id,Request $request){
     
    // $student=Student::all();
    $student=User::find($id);
    // dd($student);
    if($student){
        $student->update([

            'name'=>$request->name,
            'nid'=>$request->nid,
            'email' => $request->email,
            'phone_number'=>$request->phone_number,
            'address'=>$request->address,
            // 'image'=>$filename

        ]);
        return redirect()->route('admin.student'); 
       
    }

}

}