@extends('admin.master')
@section('main')

<div class="container-fluid px-4">
          <h1 class="mt-4">Request</h1>
          <a href="{{route('website.form')}}" class="btn btn-success" style="float:right;">Add new</a>
          <ol class="breadcrumb mb-4">
              <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
              <li class="breadcrumb-item active">Tables</li>
          </ol>
          <div class="card mb-4">
              <div class="card-header">
                  <i class="fas fa-table me-1"></i>
                  DataTable
              </div>
              <div>
                
              </div>
              <div class="card-body">
                  <table id="datatablesSimple">
                      <thead>
                          <tr>
                              <th>Full Name</th>
                              <th>Email</th>
                              <th>Address</th>
                              <th>Room Type</th>
                              <th>Date</th>
                              <th>Phone Number</th>
                              <th>Send Request</th>
                              <th>Action</th>
                          </tr>
                      </thead>
                     
                      <tbody>
                      @foreach($requests as $request)
                          <tr>
                              <td>{{$request->full_name}}</td>
                              <td>{{$request->email}}</td>
                              <td>{{$request->address}}</td>
                              <td>{{$request->room_type}}</td>
                              <td>{{$request->date}}</td>
                              <td>{{$request->phone_number}}</td>
                              <td>{{$request->send_request}}</td>
                             
                              
                                
                          </tr>
                          @endforeach
                      </tbody>
                  </table>
              </div>
          </div>
      </div>


@endsection