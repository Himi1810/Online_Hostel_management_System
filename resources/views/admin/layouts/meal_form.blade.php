@extends('admin.master')
@section('main')

<form action="{{route('meal.store')}}"method='post' enctype="multipart/form-data">
    @csrf

    <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Enter Your Student ID</label>
    <select name="student_id" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    @foreach($students as $student)
      <option value="{{$student->id}}">{{$student->name}}</option>
      @endforeach
</select>
  </div>

  <div class="mb-3">
  <div class="form-group">
    <label for="exampleFormControlSelect1">Enter Your Meal Category </label>
    <select name="meal_category" class="form-control" id="exampleFormControlSelect1">
      <option>Breakfast</option>
      <option>Lunch</option>
      <option>Dinner</option>
    </select>
  </div>
</div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Enter Your Meal Fee </label>
    <input type="number" name="meal_fee" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Enter Your Meal History </label>
    <input type="text" name="meal_history" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Photo</label>
    <input type="file" name="image" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  

  
 
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@stop