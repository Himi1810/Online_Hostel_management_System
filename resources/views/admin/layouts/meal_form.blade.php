@extends('admin.master')
@section('main')

<form action="{{route('meal.store')}}"method='post' enctype=" multipart/form-data">
    @csrf

    <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Enter Your Student ID</label>
    <input type="number" name="student_id" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>

    <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Enter Your Meal Catagory</label>
    <input type="text" name="meal_catagory" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Enter Your Meal Fee </label>
    <input type="number" name="meal_fee" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Enter Your Meal History </label>
    <input type="text" name="meal_history" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  

  
 
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@stop