@extends('admin.master')

@section('main')


      <div class="container-fluid px-4">
          <h1 class="mt-4">Admin List</h1>
          <a href="{{route('admin.form')}}" class="btn btn-success" style="float:right;">Add new</a>
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
                              <th>Name</th>
                              <th>Nid</th>
                              <th>Phone Number</th>
                              <th>Email</th>
                              <th>Address</th>
                              <th>Image</th>
                              <th>Action</th>
                          </tr>
                      </thead>
                     
                      <tbody>
                      @foreach($admins as $admin)
                          <tr>
                              <td>{{$admin->name}}</td>
                              <td>{{$admin->nid}}</td>
                              <td>{{$admin->phone_number}}</td>
                              <td>{{$admin->email}}</td>
                              <td>{{$admin->address}}</td>
                              <td>
                                  <img width="100px" src="{{url('/uploads/admin/'.$admin->image)}}" alt="">

                              </td>
                              <td>
                              <a class="btn btn-primary" href="{{route('admin.view',$admin->id)}}">View</a>
                              <a class="btn btn-danger"  href="{{route('admin.delete',$admin->id)}}">Delete</a>

                              </td>
                                  
                          </tr>
                          @endforeach
                      </tbody>
                  </table>
              </div>
          </div>
      </div>
               

@endsection