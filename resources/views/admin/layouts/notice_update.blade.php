@extends('admin.master')
@section('main')

<form action="{{route('notice.update',$notice->id)}}"method='post' >
    @csrf
    @method('put')

    <!-- <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Enter Your Student ID</label>
    <input type="number" name="student_id" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div> -->

    <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Enter Your Notice Date</label>
    <input value="{{$notice->notice_date}}" type="date" name="notice_date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Enter Your Notice_title </label>
    <input value="{{$notice->notice_title}}" type="text" name="notice_title" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Enter Your Notice Description </label>
    <input value="{{$notice->notice_description}}" type="text" name="notice_description" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  
  
 
  <button type="submit" class="btn btn-primary">Update</button>
</form>
@stop