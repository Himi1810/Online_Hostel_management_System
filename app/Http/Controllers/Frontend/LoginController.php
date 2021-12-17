<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class LoginController extends Controller
{
    public function registrationform()
    {
        return view('website.registration');
    }
    public function doRegistration(Request $request){
        // dd($request->all());
        User::create([
            'username'=>$request->username,
            'email'=>$request->email,
            'phone_number'=>$request->phone_number,
            'password'=>bcrypt( $request->password),
        ]);
        return redirect()->route('user.login');
    }
}
