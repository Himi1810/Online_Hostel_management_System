@extends('admin.master')
@section('main')

<form action="{{route('admin.hostel_informationupdate',$hostel->id)}}"method='post'>
    @csrf
    @method('put')
  <div class="mb-3">    
    <label for="exampleInputEmail1" class="form-label">Enter Your Number of Rooms</label>
    <input value="{{$hostel->number_of_rooms}}" type="number" name="number_of_rooms" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Enter Your Hostel Location</label>
    <input value="{{$hostel->hostel_location}}" type="text" name="hostel_location" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Enter Your Total Rooms</label>
    <input value="{{$hostel->total_rooms}}" type="text" name="total_rooms" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>

  <div class="mb-3">
  <div class="form-group">
    <label for="exampleFormControlSelect1">Enter Your Hostel Type</label>
    <select value="{{$hostel->hostel_type}}" name="hostel_type" class="form-control" id="exampleFormControlSelect1">
      <option>Boys</option>
      <option>Girls</option>
    </select>
  </div>
</div>

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Enter Your Name of the Hostel</label>
    <input value="{{$hostel->name_of_the_hostel}}" type="text" name="name_of_the_hostel" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>

  
 
  <button type="submit" class="btn btn-primary">Update</button>
</form>





@endsection