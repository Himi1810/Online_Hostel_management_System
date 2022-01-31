@extends('admin.master')
@section('main')

<form action="{{route('manageroom.update',$manageroom->id)}}" method='post' >
    @csrf
    @method('put')
    <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Enter Your Student ID</label>
    <input  value="{{$manageroom->student_id}}" type="number" name="student_id" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>

    <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Enter Your Room Name</label>
    <input  value="{{$manageroom->room_name}}" type="text" name="room_name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Enter Your Room Type </label>
    <input  value="{{$manageroom->room_type}}" type="text" name="room_type" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Enter Your Room fee </label>
    <input  value="{{$manageroom->room_fee}}" type="number" name="room_fee" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
  <div class="form-group">
    <label for="exampleFormControlSelect1">Enter Your Allocative </label>
    <select  value="{{$manageroom->allocative}}" name="allocative" class="form-control" id="exampleFormControlSelect1">
      <option>YES</option>
      <option>NO</option>
    </select>
  </div>
</div>

  
 
  <button type="submit" class="btn btn-primary">Update</button>
</form>



@endsection