@extends('admin.master')

@section('main')


      <div class="container-fluid px-4">
          <h1 class="mt-4">Manage Room List</h1>
          <a href="{{route('admin.manageroomform')}}" class="btn btn-success" style="float:right;">Add New Room</a>
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
                              <th>Student ID</th>
                              <th>Room Name</th>
                              <th>Room Type</th>
                              <th>Room Fee</th>
                              <th>Image</th>
                              <th>Allocative</th>
                              <th>Action</th>
                             
                             
                          </tr>
                      </thead>
                     
                      <tbody>
                      @foreach($managerooms as $manageroom)
                          <tr>
                              <td>{{$manageroom->student_id}}</td>
                              <td>{{$manageroom->room_name}}</td>
                              <td>{{$manageroom->room_type}}</td>
                              <td>{{$manageroom->room_fee}}</td>
                             
                              <td>
                              <img width="70px" src="{{url('/uploads/manageroom/'.$manageroom->image)}}" alt="">
                              </td>
                              <td>{{$manageroom->allocative}}</td>
                              <td>
                              <a class="btn btn-primary" href="{{route('manageroom.view',$manageroom->id)}}">View</a>
                              <a class="btn btn-danger"  href="{{route('manageroom.delete',$manageroom->id)}}">Delete</a>
                              <a class="btn btn-success" href="{{route('manageroom.edit',$manageroom->id)}}">Edit</a>
                              </td>
                              
                              
                          </tr>
                          @endforeach
                      </tbody>
                  </table>
              </div>
          </div>
      </div>
               

@endsection