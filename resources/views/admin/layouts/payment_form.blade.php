@extends('admin.master')
@section('main')

<form action="{{route('payment.store')}}"method='post' >
    @csrf

    <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Enter Your Student ID</label>
    <input type="number" name="student_id" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>

    <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Enter Your Amount</label>
    <input type="number" name="amount" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Enter Your payment Date </label>
    <input type="date" name="payment_date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  
  <!-- <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Enter Your payment Status </label>
    <input type="text" name="payment_status" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div> -->
  <div class="mb-3">
  <div class="form-group">
    <label for="exampleFormControlSelect1">Enter Your Payment Method </label>
    <select name="payment_method" class="form-control" id="exampleFormControlSelect1">
      <option>Cash On</option>
      
    </select>
  </div>
</div>

  
 
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@stop