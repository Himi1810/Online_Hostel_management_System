<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Meal;


use Illuminate\Http\Request;


class StudentprofileController extends Controller
{
    public function studentprofile(){
        
        $meals = Meal::where('student_id',auth()->user()->id)->get();
        
        return view('website.pages.studentprofile',compact('meals'));
}
}