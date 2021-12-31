@extends('admin.master')

@section('main')


      <div class="container-fluid px-4">
          <h1 class="mt-4">Notice List</h1>
          <a href="{{route('notice.form')}}" class="btn btn-success" style="float:right;">Add new</a>
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
                              <th>Notice Date</th>
                              <th>Notice Title</th>
                              <th>Notice Description</th>
                              <th>Action</th>
                              
                          </tr>
                      </thead>
                     
                      <tbody>
                      @foreach($notices as $notice)
                          <tr>
                              <td>{{$notice->notice_date}}</td>
                              <td>{{$notice->notice_title}}</td>
                              <td>{{$notice->notice_description}}</td>
                             <td><a class="btn btn-primary" href="{{route('notice.view',$notice->id)}}">View</a>
                              <a class="btn btn-danger"  href="{{route('notice.delete',$notice->id)}}">Delete</a>
                              <a class="btn btn-success" href="{{route('notice.edit',$notice->id)}}">Edit</a></td>
                              

                              
                                
                          </tr>
                          @endforeach
                      </tbody>
                  </table>
              </div>
          </div>
      </div>
               

@endsection