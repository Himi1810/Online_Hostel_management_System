@extends('admin.master')

@section('main')
<a href="{{route('admin.hostel')}}" class="btn btn-primary">add</a>
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Email</th>
      <th scope="col">Password</th>
    
    </tr>
  </thead>
  <tbody>
    @foreach($host as $a)
    <tr>
      <th scope="row">{{$a->id}}</th>
      <td>{{$a->email}}}</td>
      <td>{{$a->password}}</td>
     
    </tr>
    @endforeach
    
  </tbody>
</table>
@endsection