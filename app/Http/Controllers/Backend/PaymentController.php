<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Payment;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function paymentlist(){
       

        return view('admin.layouts.payment_list');
    }

    public function paymentform(){
        return view('admin.layouts.payment_form');
    }

    public function store(Request $request){
        Payment::create([
            'id'=>$request->id,
            'student_id'=>$request->student_id,

            'amount'=>$request->amount,
            'payment_date'=>$request->payment_date,
            'payment_status'=>$request->payment_status,
            'payment_method'=>$request->payment_method,



        

        ]);
        return redirect()->back(); 
}
}
