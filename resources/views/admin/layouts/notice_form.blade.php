@extends('admin.master')
@section('main')

<form action="{{route('notice.store')}}"method='post' enctype=" multipart/form-data">
    @csrf

    <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Enter Your Student ID</label>
    <input type="number" name="student_id" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>

    <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Enter Your Notice Date</label>
    <input type="date" name="notice_date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Enter Your Notice_title </label>
    <input type="text" name="notice_title" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Enter Your Notice Description </label>
    <input type="text" name="notice_description" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  
  
 
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@stop