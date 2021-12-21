@extends('admin.master')
@section('main')
<h1>Request List</h1>

                              <td> Full Name {{$request->full_name}}</td>
                              <td>Email {{$request->email}}</td>
                              <td>Address {{$request->address}}</td>
                              <td>Room Type {{$request->room_type}}</td>
                              <td>Date {{$request->date}}</td>
                              <td>Phone Number {{$request->phone_number}}</td>
                              <td>Send Request {{$request->send_request}}</td>





@endsection