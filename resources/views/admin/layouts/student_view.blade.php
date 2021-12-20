@extends('admin.master')
@section('main')

<h1>Student Details</h1>

                              <p>Name {{$student->name}}</p>
                              <p>NId {{$student->nid}}</p>
                              <p>Phone Number {{$student->phone_number}}</p>
                              <p>Email {{$student->email}}</p>
                              <p>Address {{$student->address}}</p>
                              <p>
                                  <img width="100px" src="{{url('/uploads/student/'.$student->image)}}" alt="">
                              </p>
                              <p>action </p>












@endsection