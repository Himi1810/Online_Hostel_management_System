@extends('admin.master')

@section('main')


      <div class="container-fluid px-4">
          <h1 class="mt-4">Visitor List</h1>
          <a href="{{route('visitor.form')}}" class="btn btn-success" style="float:right;">Add new</a>
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
                             
                              <th>Address</th>
                              <th>Image</th>
                              <th>Action</th>
                              
                          </tr>
                      </thead>
                     
                      <tbody>
                      @foreach($visitors as $visitor)
                          <tr>
                              <td>{{$visitor->name}}</td>
                              <td>{{$visitor->nid}}</td>
                              <td>{{$visitor->phone_number}}</td>
                             
                              <td>{{$visitor->address}}</td>
                              <td>
                              <img width="100px" src="{{url('/uploads/visitor/'.$visitor->image)}}" alt="">
                              </td>
                              <td>
                              <a class="btn btn-primary" href="{{route('visitor.view',$visitor->id)}}">View</a>
                              <a class="btn btn-danger"  href="{{route('visitor.delete',$visitor->id)}}">Delete</a>
                              <a class="btn btn-success" href="{{route('visitor.edit',$visitor->id)}}">Edit</a>

                              </td>
                             
                          </tr>
                          @endforeach
                      </tbody>
                  </table>
              </div>
          </div>
      </div>
               

@endsection