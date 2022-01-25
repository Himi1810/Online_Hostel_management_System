<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Employee;
use App\Models\Hostel;
use App\Models\Manageroom;
use App\Models\Roombooking;
use App\Models\Payment;
use App\Models\Visitor;
use App\Models\Userrequest;
use App\Models\Meal;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{

    public function dashboard()
    {

        $student = User::where('role','student')->count();
        $employee = User::where('role','employee')->count();
        $hostel=Hostel::count();
        $room=Manageroom::count();
        $bookingroom=Roombooking::count();
        $payment=Payment::count();
        $userreq=Userrequest::count();
        $meal=Meal::count();
        $visitor=Visitor::count();
       
        return view('admin.dashboard',compact('student','employee','hostel','room','bookingroom','payment','userreq','meal','visitor'));
    }
    public function login()
    {
        return view('admin.layouts.admin_form');
    }
    public function dologin(Request $req){
        // dd($req->all());
        // // dd($req->all());
        $userInfo=$req->except('_token');
        if(Auth::attempt($userInfo)){
            return redirect()->route('dashboard');
        }
        return redirect()->back();
      
    }

    public function logout(){
        return view('admin.layouts.admin_form');
    }
}
