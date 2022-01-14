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

        //   dd($request->all());
        $filename='';
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = date('Ymdhms').'.'.$file->getClientOriginalExtension();
            // dd($filename);
            $file->storeAs('/uploads/meal',$filename);
            
        }
        Meal::create([
            'student_id'=>$request->student_id,
            'meal_category'=>$request->meal_category,
            'meal_fee'=>$request->meal_fee,
            'meal_history'=>$request->meal_history,
            'image'=>$filename

            

        ]);
        return redirect()->back(); 
}

public function meal_view($id){
    $meal=Meal::find($id);

    return view('admin.layouts.meal_view',compact('meal'));
}

public function meal_delete($id){
    $meal=Meal::find($id);
    
        //  dd($meal);
          if($meal){
                  $meal->delete();

                  
         return redirect()->back();
}
}

public function meal_edit($id){
     
    // $meal=Meal::all();
    $meal=Meal::find($id);
    // dd($meal);
    if($meal){

        return view('admin.layouts.meal_update',compact('meal'));
    }
}

public function meal_update($id,Request $request){
 

$meal=Meal::find($id);
// dd($meal);
if($meal){
    $meal->update([
        'student_id'=>$request->student_id,
        'meal_category'=>$request->meal_category,
        'meal_fee'=>$request->meal_fee,
        'meal_history'=>$request->meal_history,


    ]);
    return redirect()->route('admin.meal'); 
   
}

}
}
