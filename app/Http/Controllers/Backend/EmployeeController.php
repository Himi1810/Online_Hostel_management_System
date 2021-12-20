<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function employeelist(){
        $employees = Employee::all();
        // dd($employees);
        return view('admin.layouts.employee_list',compact('employees'));
    }
    public function employeeform(){
        return view('admin.layouts.employee_form');
    }
    public function store(Request $request){
         // dd($request->all());
         $filename='';
         if ($request->hasFile('image')) {
             $file = $request->file('image');
             $filename = date('Ymdhms').'.'.$file->getClientOriginalExtension();
             $file->storeAs('/uploads/employee',$filename);
         }
        Employee::create([
            'name'=>$request->name,
            'nid'=>$request->nid,
            'email'=>$request->email,
            'address'=>$request->address,
            'phone_number'=>$request->phone_number,
            'image'=>$filename,

        ]);
        return redirect()->back(); 
    }

    public function employee_view($id){
        $employee=Employee::find($id);

        return view('admin.layouts.employee_view',compact('employee'));
    }

    public function employee_delete($id){
        $employee=Employee::find($id);
            // dd($employee);
              if($employee){
                      $employee->delete();

                      
             return redirect()->back();
}
    }
    
}
