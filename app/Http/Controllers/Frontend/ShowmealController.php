<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Meal;
use Illuminate\Http\Request;

class ShowmealController extends Controller
{
    public function showmeal(){
        $meals =meal::all();
        return view('website.pages.showmeal',compact('meals'));
    }
}
