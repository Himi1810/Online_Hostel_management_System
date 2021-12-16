@extends('admin.master')

@section('main')


      <div class="container-fluid px-4">
          <h1 class="mt-4">Employee List</h1>
          <a href="{{route('employee.form')}}" class="btn btn-success" style="float:right;">Add new</a>
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
                          </tr>
                      </thead>
                     
                      <tbody>
                      @foreach($employees as $employee)
                          <tr>
                              <td>{{$employee->name}}</td>
                              <td>{{$employee->nid}}</td>
                              <td>{{$employee->phone_number}}</td>
                              <td>{{$employee->email}}</td>
                              <td>{{$employee->address}}</td>
                              <td>
                                  <img src="{{url(''.$employee->image)}}" alt="">
                              </td>
                          </tr>
                          @endforeach
                      </tbody>
                  </table>
              </div>
          </div>
      </div>
               

@endsection