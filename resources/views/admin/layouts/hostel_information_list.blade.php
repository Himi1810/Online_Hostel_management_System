@extends('admin.master')

@section('main')


      <div class="container-fluid px-4">
          <h1 class="mt-4">hostel information Details</h1>
          <a href="{{route('admin.hostel_informationform')}}" class="btn btn-success" style="float:right;">Add new</a>
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
                              <th>Number of rooms</th>
                              <th>Hostel Location</th>
                              <th>Hostel Type</th>
                              <th>Total Rooms</th>
                              <th>Name of the Hostel</th>
                              <th>Action</th>
                             
                          </tr>
                      </thead>
                     
                      <tbody>
                          
                      @foreach($hostel as $hostel)
                          <tr>
                              <td>{{$hostel->number_of_rooms}}</td>
                              <td>{{$hostel->hostel_location}}</td>
                              <td>{{$hostel->hostel_type}}</td>
                              <td>{{$hostel->total_rooms}}</td>
                              <td>{{$hostel->name_of_the_hostel}}</td>
                              <td>
                                  <a class="btn btn-primary" href="{{route('admin.hostel_informationview',$hostel->id)}}">View</a>
                                  <a class="btn btn-danger"  href="{{route('admin.hostel_informationdelete',$hostel->id)}}">Delete</a>
                                  <a class="btn btn-success" href="{{route('admin.hostel_informationedit',$hostel->id)}}">Edit</a>

                              </td>
                              
                          </tr>
                          @endforeach
                      </tbody>
                  </table>
              </div>
          </div>
      </div>
               

@endsection