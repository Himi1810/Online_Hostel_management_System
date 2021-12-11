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
        Employee::create([
            'name'=>$request->name,
            'nid'=>$request->nid,
            'email'=>$request->email,
            'address'=>$request->address,
            'phone_number'=>$request->phone_number,

        ]);
        return redirect()->back(); 
    }
    
}
