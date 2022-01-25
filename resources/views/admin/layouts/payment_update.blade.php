@extends('admin.master')
@section('main')

<form action="{{route('payment.update',$payment->id)}}"method='post' >
    @csrf
    @method('put')

    <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Enter Your Student ID</label>
    <input value="{{$payment->student_id}}" type="number" name="student_id" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>

    <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Enter Your Amount</label>
    <input value="{{$payment->amount}}" type="number" name="amount" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Enter Your payment Date </label>
    <input value="{{$payment->payment_date}}" type="date" name="payment_date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  
  <!-- <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Enter Your payment Status </label>
    <input value="{{$payment->payment_status}}" type="text" name="payment_status" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div> -->
  <div class="mb-3">
  <div class="form-group">
    <label for="exampleFormControlSelect1">Enter Your Payment Method </label>
    <select value="{{$payment->payment_method}}" name="payment_method" class="form-control" id="exampleFormControlSelect1">
      <option>Bkash</option>
      <option>Rocket</option>
      <option>Bank</option>
    </select>
  </div>
</div>

  
 
  <button type="submit" class="btn btn-primary">Update</button>
</form>





@endsection