@extends('admin.master')
@section('main')

<form action="{{route('visitor.update',$visitor->id)}}"method='post' enctype="multipart/form-data">
    @csrf
    @method('put')

    <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Enter Your Name</label>
    <input value="{{$visitor->name}}" type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Enter Your Address</label>
    <input value="{{$visitor->address}}"  type="text" name="address" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Enter Your NID</label>
    <input value="{{$visitor->nid}}" type="number" name="nid" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Enter Your Phone Number</label>
    <input value="{{$visitor->phone_number}}" type="number" name="phone_number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Enter Your Relation</label>
    <input value="{{$visitor->relation}}" type="text" name="relation" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>

  <!-- <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Photo</label>
    <input type="file" name="image" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div> -->
 
  <button type="submit" class="btn btn-primary">Update</button>
</form>












@endsection