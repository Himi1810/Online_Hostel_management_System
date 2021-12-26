@extends('admin.master')
@section('main')

<form action="{{route('employee.update',$employee->id)}}"method='post' enctype="multipart/form-data">
    @csrf
    @method('put')
    <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Enter Your Name</label>
    <input value="{{$employee->name}}" type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Enter Your Email</label>
    <input value="{{$employee->email}}" type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Enter Your Address</label>
    <input type="text" name="address" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Enter Your NID</label>
    <input value="{{$employee->nid}}" type="number" name="nid" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Enter Your Phone Number</label>
    <input value="{{$employee->phone_number}}" type="number" name="phone_number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>

 
 
  <button type="submit" class="btn btn-primary">Update</button>
</form>








@endsection