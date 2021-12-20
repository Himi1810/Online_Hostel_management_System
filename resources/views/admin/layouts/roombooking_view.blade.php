@extends('admin.master')
@section('main')
<h1>Room Details</h1>

                              <p>Room Id {{$roombooking->room_id}}</p>
                              <p>Student Id {{$roombooking->student_id}}</p>
                              <p>Booking Date {{$roombooking->booking_date}}</p>
                              <p>Room status {{$roombooking->room_status}}</p>
                              <p>Room Fee {{$roombooking->room_fee}}</p>
                              <p>action</p>





@endsection