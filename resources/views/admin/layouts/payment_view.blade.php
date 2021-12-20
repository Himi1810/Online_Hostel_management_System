@extends('admin.master')
@section('main')

<h1>Payment</h1>
                               <p>Student ID {{$payment->student_id}}</p>
                              <p>Amount {{$payment->amount}}</p>
                              <p>Payment Date{{$payment->payment_date}}</p>
                              <p>Payment status{{$payment->payment_status}}</p>
                              <p>Payment Method{{$payment->payment_method}}</p>
                               <p>action</p>





@endsection