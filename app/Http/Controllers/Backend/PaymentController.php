<?php

namespace App\Http\Controllers\backend;

use App\Models\User;
use App\Models\Payment;
use App\Models\Roombooking;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PaymentController extends Controller
{
    public function paymentlist(){
        $payments = Payment::all();
        // dd($payments);
       

        return view('admin.layouts.payment_list',compact('payments'));
    }

    public function paymentform(){
        return view('admin.layouts.payment_form');
    }

    // public function showpayment(){

    //     $payments = Payment::all();


    //     return view('website.pages.showpayment',compact('payments'));
    // }

    public function showpayform($id){
// dd($id);
        $roomBooking = Roombooking::find($id);
        // dd($roomBooking);
        $students = User::where('id',$roomBooking->student_id)->get();
        // dd($students);
        $payments = Payment::all();

        return view('admin.layouts.showpay_form',compact('payments','roomBooking','payments'));
    }

    public function paymentstore(Request $request,$id){

        // dd($request->all());

        $payments = Payment::find($id);
try{
        Payment::create([
            'student id'=>$request->student_id,
            'amount'=>$request->amount,
            'payment_date'=>$request->payment_date,
            'payment_method'=>$request->payment_method,

            

        ]);

        return redirect()->route()-with('payment successful'); 
    }
    catch(Throwable $throw){

        return redirect()->back()->with('error','payment unsuccessful!'); 
    }
    }







    public function store(Request $request){
        Payment::create([
            
            'student_id'=>$request->student_id,

            'amount'=>$request->amount,
            'payment_date'=>$request->payment_date,
           
            'payment_method'=>$request->payment_method,



        

        ]);
        return redirect()->back(); 
}

public function payment_view($id){
    $payment=Payment::find($id);

    return view('admin.layouts.payment_view',compact('payment'));
}
public function payment_delete($id){
    $payment=Payment::find($id);
    
        //  dd($payment);
          if($payment){
                  $payment->delete();

                  
         return redirect()->back();
}
}

public function payment_edit($id){
     
    // $payment=Payment::all();
    $payment=payment::find($id);
    // dd($payment);
    if($payment){

        return view('admin.layouts.payment_update',compact('payment'));
    }
}

public function payment_update($id,Request $request){
 

$payment=Payment::find($id);
// dd($payment);
if($payment){
    $payment->update([

        'student_id'=>$request->student_id,
            'amount'=>$request->amount,
            'payment_date'=>$request->payment_date,
            
            'payment_method'=>$request->payment_method,


        
    ]);
    return redirect()->route('admin.payment'); 
   
}

}
}
