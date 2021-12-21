@extends('website.master')
@section('contents')

<div class="row" style="margin-top:100px">
  <div class="col-md-1" >
  </div>
  <div class="col-md-10">
  <form action="{{route('website.form')}}"method='get'>
    @csrf
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Enter Your Full Name</label>
    <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Enter Your Email</label>
    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Enter Your Address</label>
    <input type="text" name="address" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Enter Your Room Type</label>
    <input type="text" name="room_type" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Date</label>
    <input type="date" name="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Enter Your Phone Number</label>
    <input type="number" name="phone_number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Send Request</label>
    <input type="text" name="send_request" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  

  
 
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
  <div class="col-md-1">
  </div>
</div>






@endsection