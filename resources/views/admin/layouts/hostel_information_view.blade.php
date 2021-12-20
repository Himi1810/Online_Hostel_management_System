@extends('admin.master')
@section('main')

<h1>Hostel Details</h1>

                              <p>Number of rooms {{$hostel->number_of_rooms}}</p>
                              <p>Hostel Location {{$hostel->hostel_location}}</p>
                              <p>Hostel Type {{$hostel->hostel_type}}</p>
                              <p>Total Rooms {{$hostel->total_rooms}}</p>
                              <p>Name of the Hostel {{$hostel->name_of_the_hostel}}</p>
                              <p>Action</p>

@endsection