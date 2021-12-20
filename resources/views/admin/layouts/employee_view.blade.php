@extends('admin.master')
@section('main')
<h1>employee List</h1>

                              <p>Name {{$employee->name}}</p>
                              <p> NId {{$employee->nid}}</p>
                              <p>Phone Number {{$employee->phone_number}}</p>
                              <p>Email {{$employee->email}}</p>
                              <p>Address {{$employee->address}}</p>
                              <p>
                              <img width="70px" src="{{url('/uploads/employee/'.$employee->image)}}" alt="">
                              </p>
                              <p>action</p>









@endsection