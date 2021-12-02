<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function employeelist(){
        return view('admin.layouts.employee_list');
    }
    public function employeeform(){
        return view('admin.layouts.employee_form');
    }
    public function store(Request $request){
        Employee::create([
            'name'=>$request->name,
            'nid'=>$request->phone_number,

            'phone_number'=>$request->phone_number,

        ]);
        return redirect()->back(); 
    }
    
}
