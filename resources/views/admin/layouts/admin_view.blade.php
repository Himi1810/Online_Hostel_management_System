@extends('admin.master')
@section('main')

<h1>Admin Details</h1>
                              <p>Name {{$admin->name}}</p>
                              <p>NId {{$admin->nid}}</p>
                              <p>Phone Number {{$admin->phone_number}}</p>
                              <p>Email {{$admin->email}}</p>
                              <p>Address {{$admin->address}}</p>
                              <p>
                                  <img width="100px" src="{{url('/uploads/admin/'.$admin->image)}}" alt="">

                              </p>
                              <p>action </p>





@endsection