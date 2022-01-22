@extends('website.master')
@section('contents')

<form action="{{route('website.mealpayment')}}"method='post' >
    @csrf

    <div style="text-align:center;">
            <h1>Meal Payment Process</h1>

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
  
  
  <div class="mb-3">
  <div class="form-group">
    <label for="exampleFormControlSelect1">Enter Your Payment Method </label>
    <select name="payment_method" class="form-control" id="exampleFormControlSelect1">
      <option>Bkash</option>
      <option>Rocket</option>
      <option>Bank</option>
    </select>
  </div>
</div>

  
 
<a class="btn btn-primary" href="{{route('website.home')}}">Submit</a>
</form>



@endsection