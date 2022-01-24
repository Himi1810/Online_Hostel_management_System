<?php

namespace App\Http\Controllers\Backend;

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


use Illuminate\Http\Request;

class DashboardController extends Controller
{
     public function dashboard(){

    // dd($count->all());

            $student = User::where('role','student')->count();
            // dd($student);
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
    
        
}
