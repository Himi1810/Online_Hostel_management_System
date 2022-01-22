<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Payment;
use Illuminate\Http\Request;

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

    public function showpayment(){
        $payments = Payment::all();
        return view('website.pages.showpayment',compact('payments'));
    }


    public function paymentstore(Request $request,$id){

        $payments = Payment::find($id);
try{
        Payment::create([
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
            'payment_status'=>$request->payment_status,
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
            'payment_status'=>$request->payment_status,
            'payment_method'=>$request->payment_method,


        
    ]);
    return redirect()->route('admin.payment'); 
   
}

}
}
