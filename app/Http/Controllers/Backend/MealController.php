<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Meal;

use Illuminate\Http\Request;

class MealController extends Controller
{
    public function meallist(){
        return view('admin.layouts.meal_list');
    }

    public function mealform(){
        return view('admin.layouts.meal_form');
    }

    public function store(Request $request){
        Manageroom::create([
            'meal_catagory'=>$request->meal_catagory,
            'meal_fee'=>$request->meal_fee,

            

        ]);
        return redirect()->back(); 
}
}
