<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Hostel;
use Illuminate\Http\Request;

class ShowinfoController extends Controller
{
    
    public function showinfo(){
        $hostels =hostel::all();
        return view('website.pages.showinfo',compact('hostels'));
    }
}
