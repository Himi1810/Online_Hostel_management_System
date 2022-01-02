@extends('admin.master')

@section('main')


      <div class="container-fluid px-4">
          <h1 class="mt-4">Room Details</h1>
          <a href="{{route('roombooking.form')}}" class="btn btn-success" style="float:right;">Add new</a>
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
                              <th>Seat Id</th>
                              <th>Student Id</th>
                              <th>Booking Date</th>
                              <th>Room Status</th>
                              <th>Room Fee</th>
                              <th>Action</th>
                              
                          </tr>
                      </thead>
                     
                      <tbody>
                      @foreach($roombookings as $roombooking)
                          <tr>
                              <td>{{$roombooking->seat_id}}</td>
                              <td>{{$roombooking->student_id}}</td>
                              <td>{{$roombooking->booking_date}}</td>
                              <td>{{$roombooking->room_status}}</td>
                              <td>{{$roombooking->room_fee}}</td>
                              <td>
                              <a class="btn btn-primary" href="{{route('roombooking.view',$roombooking->id)}}">View</a>
                              <a class="btn btn-danger"  href="{{route('roombooking.delete',$roombooking->id)}}">Delete</a>
                              <a class="btn btn-success" href="{{route('roombooking.edit',$roombooking->id)}}">Edit</a>


                              </td>
                              
                          </tr>
                          @endforeach
                      </tbody>
                  </table>
              </div>
          </div>
      </div>
               

@endsection