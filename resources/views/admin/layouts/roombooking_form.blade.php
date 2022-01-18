@extends('admin.master')
@section('main')


@if (\Session::has('success'))
    <div class="alert alert-success">
       <p>{{ \Session::get('success') }}</p>
    </div>
@endif
@if (\Session::has('failure'))
    <div class="alert alert-danger">
       <p>{{ \Session::get('failure') }}</p>
    </div>
@endif

<form action="{{route('roombooking.store')}}"method='post' enctype=" multipart/form-data">
    @csrf

    <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Enter Your Seat Id</label>
    <select name="seat_id" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
      @foreach($managerooms as $manageroom)
      <option value="{{$manageroom->id}}">{{$manageroom->room_name}}</option>
      @endforeach
</select>

  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Enter Your Booking Date</label>
    <input type="date" name="booking_date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Enter Your Student Id</label>
    <select name="student_id" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
      @foreach($students as $student)
      <option value="{{$student->id}}">{{$student->name}}</option>
      @endforeach
</select>
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Status</label>
    <input type="text" name="status" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
 
  
  
  
 
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

@stop