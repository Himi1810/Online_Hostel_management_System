@extends('website.master')
@section('contents')


<div class="container-fluid px-4 mt-5">
          <h1 class="mt-4">User Request list</h1>

          <!-- <a href="{{route('admin.layouts.userprofile_list')}}" class="btn btn-success" style="float:right;">Add new</a> -->
          <ol class="breadcrumb mb-4">
              <!-- <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li> -->
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
                  <table class="table" id="datatablesSimple">
                      <thead>
                          <tr>
                              <th>Student ID</th>
                             
                              <th>Seat ID</th>
                              <th>Booking Date</th>
                              <th>Email</th>
                              <th>Status</th>

                              <th>Action</th>
                          </tr>
                      </thead>
                     
                      <tbody>
                      @foreach($userRequest as $usertable)
                          <tr>
                              <td>{{$usertable->student_id}}</td>
                              <td>{{$usertable->seat_id}}</td>
                              <td>{{$usertable->booking_date}}</td>
                              <td>{{$usertable->email}}</td>
                              <td>{{$usertable->status}}</td>
                              
                              <td>
                                  @if($usertable->status == "accept")
                              <!-- <a class="btn btn-danger" href="{{route('userprofile.reject',$usertable->id)}}">Reject</a> -->
                                @else
                              <!-- <a class="btn btn-primary" href="{{route('userprofile.accept',$usertable->id)}}">Accept</a> -->
                              @endif
                              <!-- <a class="btn btn-success" href="{{route('userprofile.view',$usertable->id)}}">View</a> -->
                              <a class="btn btn-danger" href="{{route('payment.form')}}">Add Payment</a>
                             
                              </td>
                          </tr>
                          @endforeach
                      </tbody>
                  </table>
              </div>
          </div>
      </div>


@endsection