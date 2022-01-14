<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EmployeeRegistrationController extends Controller
{
    public function employeereg()
    {
       
        return view('website.partials.employeeregistration');
    }

    public function doemployeeregistration(Request $request){
       
        user::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'phone_number'=>$request->phone,
            'address'=>$request->address,
            'password'=>bcrypt( $request->password),
        ]);
        return redirect()->route('user.login');



    }
}
