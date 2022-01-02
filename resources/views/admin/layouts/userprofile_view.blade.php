@extends('admin.master')
@section('main')

<h1>User Request Details</h1>

                              <p>Name {{$usertable->full_name}}</p>
                              <p>Email {{$usertable->email}}</p>
                
                              <p>Date {{$usertable->date}}</p>
                              <p>Phone Number{{$usertable->phone_number}}</p>
                              <p>Description {{$usertable->description}}</p>



@endsection