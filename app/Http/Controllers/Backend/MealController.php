<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Meal;

use Illuminate\Http\Request;

class MealController extends Controller
{
    public function meallist(){
        $meals = Meal::all();
        // dd($meals);
        return view('admin.layouts.meal_list',compact('meals'));
    }

    public function mealform(){
        return view('admin.layouts.meal_form');
    }

    public function store(Request $request){
        Meal::create([
            'meal_catagory'=>$request->meal_category,
            'meal_fee'=>$request->meal_fee,
            'meal_history'=>$request->meal_history,

            

        ]);
        return redirect()->back(); 
}
}
