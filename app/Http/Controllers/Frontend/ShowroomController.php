<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Manageroom;
use Illuminate\Http\Request;

class ShowroomController extends Controller
{
    public function showroom(){
        $managerooms =manageroom::all();
        return view('website.pages.showroom',compact('managerooms'));
    }
}
