<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class EmployeeRegistrationController extends Controller
{
    public function employeereg()
    {
       
        return view('website.partials.employee_registration');
    }

    public function doemployeeregistration(Request $request){
       
        User::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'phone_number'=>$request->phone,
            'address'=>$request->address,
            'password'=>bcrypt( $request->password),
        ]);
        return redirect()->route('user.login');



    }
}
