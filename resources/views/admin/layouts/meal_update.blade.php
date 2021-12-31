@extends('admin.master')
@section('main')

<form action="{{route('meal.update',$meal->id)}}"method='post' enctype=" multipart/form-data">
    @csrf
    @method('put')
    <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Enter Your Student ID</label>
    <input  value="{{$meal->student_id}}" type="number" name="student_id" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>

  <div class="mb-3">
  <div class="form-group">
    <label for="exampleFormControlSelect1">Enter Your Meal Category </label>
    <select  value="{{$meal->meal_category}}" name="meal_category" class="form-control" id="exampleFormControlSelect1">
      <option>Morning</option>
      <option>Day</option>
      <option>Night</option>
    </select>
  </div>
</div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Enter Your Meal Fee </label>
    <input  value="{{$meal->meal_fee}}" type="number" name="meal_fee" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Enter Your Meal History </label>
    <input  value="{{$meal->meal_history}}" type="text" name="meal_history" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  

  
 
  <button type="submit" class="btn btn-primary">Update</button>
</form>







@endsection