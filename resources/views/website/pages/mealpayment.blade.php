@extends('website.master')
@section('contents')
@if(session('success'))
        <div class="alert alert-success">
            {!! session('success') !!}
        </div>
@endif

@if(session('error'))
        <div class="alert alert-danger">
            {!! session('error') !!}
    </div>
@endif

<div class="container" style="margin-left:300px; padding-right:600px;">

<form action="{{route('website.mealstore')}}"method='post' enctype="multipart/form-data">
    @csrf
    <div style="text-align:center;">
    <br>
            <h1>Meal Payment Process</h1>
</br>


  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Enter Your Meal Fee </label>
    <input type="number" name="amount" value="{{$meals->meal_fee}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Payment Method </label>
    <input type="text" name="payment_method"  class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>


  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Payment Date </label>
    <input type="date" name="payment_date"  class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>

  <input type="hidden" value="{{$meals->id}}" name="meal_id">

  
 
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection