<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Payment;
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

        $students = User::where('role','student')->orderBy('id','desc')->get();
        return view('admin.layouts.meal_form',compact('students'));
    }



    public function store(Request $request){

        //    dd($request->all());
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
            
            'image'=>$filename

            

        ]);
        return redirect()->back(); 
}



public function mealpayment($id){

    $students = User::where('role','student')->orderBy('id','desc')->get();
        $meals = Meal::find($id);

    return view('website.pages.mealpayment',compact('meals','students'));
}


public function mealstore(Request $request){
try{
    Payment::create([
        'student_id'=> auth()->user()->id,
        'meal_id'=>$request->meal_id,
        'amount'=>$request->amount,
        'payment_date'=>$request->payment_date,
        'payment_method'=>$request->payment_method,

    ]);

    return redirect()->back()->with('payment successful'); 
}
catch(Throwable $throw){

    return redirect()->back()->with('error','payment unsuccessful!'); 
}
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
       


    ]);
    return redirect()->route('admin.meal'); 
   
}

}
}
