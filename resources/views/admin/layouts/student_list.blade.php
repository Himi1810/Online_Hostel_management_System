@extends('admin.master')

@section('main')


      <div class="container-fluid px-4">
          <h1 class="mt-4">Student List</h1>
          <a href="{{route('student.form')}}" class="btn btn-success" style="float:right;">Add</a>
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
                      @foreach($students as $student)
                          <tr>
                              <td>{{$student->name}}</td>
                              <td>{{$student->nid}}</td>
                              <td>{{$student->phone_number}}</td>
                              <td>{{$student->email}}</td>
                              <td>{{$student->address}}</td>
                              <td>
                                  <img width="70px" src="{{url('/uploads/student/'.$student->image)}}" alt="">
                              </td>
                              <td>
                              <a class="btn btn-primary" href="{{route('student.view',$student->id)}}">View</a>
                              <a class="btn btn-danger"  href="{{route('student.delete',$student->id)}}">Delete</a>
                              <a class="btn btn-success" href="{{route('student.edit',$student->id)}}">Edit</a>

                              </td>
                          </tr>
                          @endforeach
                      </tbody>
                  </table>
              </div>
          </div>
      </div>
               

@endsection