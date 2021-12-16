@extends('admin.master')

@section('main')


      <div class="container-fluid px-4">
          <h1 class="mt-4">Visitor List</h1>
          <a href="{{route('visitor.form')}}" class="btn btn-success" style="float:right;">Add new</a>
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
                              <th>Relation</th>
                              <th>Address</th>
                              <th>Image</th>
                              
                          </tr>
                      </thead>
                     
                      <tbody>
                      @foreach($visitors as $visitor)
                          <tr>
                              <td>{{$visitor->name}}</td>
                              <td>{{$visitor->nid}}</td>
                              <td>{{$visitor->phone_number}}</td>
                              <td>{{$visitor->relation}}</td>
                              <td>{{$visitor->address}}</td>
                              <td>
                                  <img src="{{url(''.$visitor->image)}}" alt="">
                              </td>
                             
                          </tr>
                          @endforeach
                      </tbody>
                  </table>
              </div>
          </div>
      </div>
               

@endsection