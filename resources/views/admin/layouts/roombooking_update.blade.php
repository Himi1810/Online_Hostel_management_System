@extends('admin.master')
@section('main')

<form action="{{route('roombooking.update',$roombooking->id)}}"method='post' >
    @csrf
    @method('put')
    <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Enter Your Seat Id</label>
    <input value="{{$roombooking->seat_id}}" type="number" name="seat_id" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Enter Your Booking Date</label>
    <input value="{{$roombooking->booking_date}}" type="date" name="booking_date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Enter Your Room status</label>
    <input value="{{$roombooking->room_status}}" type="text" name="room_status" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Enter Your Room Fee</label>
    <input value="{{$roombooking->room_fee}}" type="number" name="room_fee" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Enter Your Student Id</label>
    <input value="{{$roombooking->student_id}}" type="number" name="student_id" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  
  
 
  <button type="submit" class="btn btn-primary">Update</button>
</form>


@endsection