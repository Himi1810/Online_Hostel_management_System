@extends('admin.master')
@section('main')

<form action="{{route('hostel.store')}}"method='post'  enctype="multipart/form-data">
    @csrf
  <div class="mb-3">    
    <label for="exampleInputEmail1" class="form-label">Enter Your Name of the Hostel</label>
    <input type="text" name="name_of_the_hostel" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Enter Your Hostel Location</label>
    <input type="text" name="hostel_location" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
  <div class="form-group">
    <label for="exampleFormControlSelect1">Enter Your Hostel Type</label>
    <select name="hostel_type" class="form-control" id="exampleFormControlSelect1">
      <option>Boys</option>
      <option>Girls</option>
    </select>
  </div>
</div>
<div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Enter Your Total Rooms</label>
    <input type="text" name="total_rooms" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
<!--   
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Enter Your Hostel Type</label>
    <input type="text" name="hostel_type" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div> -->
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Photo</label>
    <input type="file" name="image" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  
  
 
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@stop