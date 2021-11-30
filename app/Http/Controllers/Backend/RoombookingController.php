<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RoombookingController extends Controller
{
    public function roombooking(){
        return view('admin.layouts.roombooking');
    }
}
