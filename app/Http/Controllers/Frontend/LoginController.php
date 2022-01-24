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
        // dd("ok");
        return view('website.registration');
    }

    public function dologin()
    {
        // dd("ok");
        return view('website.login');
    }
    public function store(Request $request){
       
        // dd($request->all());
        $filename='';
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = date('Ymdhms').'.'.$file->getClientOriginalExtension();
            // dd($filename);
            $file->storeAs('/uploads/student',$filename);
            
        }
        User::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'phone_number'=>$request->phone_number,
            'address'=>$request->address,
            'nid'=>$request->nid,
            'image'=>$filename,
            'password'=>bcrypt( $request->password),
            'role' => 'student'
        ]);
        return redirect()->route('user.login');
    }

    public function loginform(){
        return view('website.login');


    }

    public function Login(Request $request){
        // dd($request->all());
        $userpost=$request->except('_token');
            // dd($userpost);
            // dd(Auth::attempt($userpost));
        if (Auth::attempt($userpost)) {
            // dd("true");
            return redirect()->route('website.home');
        }
        else
        return redirect()->route('user.login');
    }

    public function logout(){
        Auth::logout();
        return redirect()->route('website.home');
    }
         


}
