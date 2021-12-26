@extends('admin.master')
@section('main')

<form action="{{route('student.update',$student->id)}}"method='post' enctype="multipart/form-data">
    @csrf
    @method('put')
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Enter Your Name</label>
    <input value="{{$student->name}}" type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Enter Your Email</label>
    <input value="{{$student->email}}" type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Enter Your Address</label>
    <input value="{{$student->address}}" type="text" name="address" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Enter Your NID</label>
    <input value="{{$student->nid}}" type="number" name="nid" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Enter Your Phone Number</label>
    <input value="{{$student->phone_number}}" type="number" name="phone_number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Photo</label>
    <input value="{{$student->image}}" type="file" name="image" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
 
  <button type="submit" class="btn btn-primary">Update</button>
</form>




@endsection