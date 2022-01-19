@extends('admin.master')
@section('main')
<h1>Room Details</h1>

                              <p>Seat name {{$roombooking->room->room_name}}</p>
                              <p>Student name {{$roombooking->student->name}}</p>
                              <p>Booking Date {{$roombooking->booking_date}}</p>
                              <p>Room status {{$roombooking->room->allocative}}</p>
                              <p>Room Fee {{$roombooking->room->room_fee}}</p>
                              <p>Booking Status {{$roombooking->status}}</p>
                             





@endsection