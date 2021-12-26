                              
@extends('admin.master')
@section('main')

<h1>Visitor Details</h1>                   
                              
                              
                              <p>Name {{$visitor->name}}</p>
                              <p>NId {{$visitor->nid}}</p>
                              <p>Phone Number{{$visitor->phone_number}}</p>
                              <p>Relation{{$visitor->relation}}</p>
                              <p>Address{{$visitor->address}}</p>
                              <p>
                              <img width="100px" src="{{url('/uploads/visitor/'.$visitor->image)}}" alt="">
                              </p>
                              <p>action</p>

@endsection