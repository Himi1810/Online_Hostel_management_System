@extends('admin.master')

@section('main')


      <div class="container-fluid px-4">
          <h1 class="mt-4">Meal list</h1>
          <a href="{{route('meal.form')}}" class="btn btn-success" style="float:right;">Add new</a>
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
                              <th>Meal Category</th>
                              <th>Meal Fee</th>
                              <th>Meal History</th>
                              <th>Image</th>
                              <th>Action</th>
                              
                          </tr>
                      </thead>
                     
                      <tbody>
                      @foreach($meals as $meal)
                          <tr>
                              <td>{{$meal->student_id}}</td>
                              <td>{{$meal->meal_category}}</td>
                              <td>{{$meal->meal_fee}}</td>
                              <td>{{$meal->meal_history}}</td>
                              <td>
                                  <img width="70px" src="{{url('/uploads/meal/'.$meal->image)}}" alt="">
                              </td>

                              <td>
                              <a class="btn btn-primary" href="{{route('meal.view',$meal->id)}}">View</a>
                              <a class="btn btn-danger"  href="{{route('meal.delete',$meal->id)}}">Delete</a>
                              <a class="btn btn-success" href="{{route('meal.edit',$meal->id)}}">Edit</a>

                              </td>
                              
                          </tr>
                          @endforeach
                      </tbody>
                  </table>
              </div>
          </div>
      </div>
               

@endsection