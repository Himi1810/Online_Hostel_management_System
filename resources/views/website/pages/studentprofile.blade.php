@extends('website.master')
@section('contents')

<style type="text/css">
body{
    margin-top:20px;
    color: #1a202c;
    text-align: left;
    background-color: #e2e8f0;    
}
.main-body {
    padding: 15px;
}
.card {
    box-shadow: 0 1px 3px 0 rgba(0,0,0,.1), 0 1px 2px 0 rgba(0,0,0,.06);
}

.card {
    position: relative;
    display: flex;
    flex-direction: column;
    min-width: 0;
    word-wrap: break-word;
    background-color: #fff;
    background-clip: border-box;
    border: 0 solid rgba(0,0,0,.125);
    border-radius: .25rem;
}

.card-body {
    flex: 1 1 auto;
    min-height: 1px;
    padding: 1rem;
}

.gutters-sm {
    margin-right: -8px;
    margin-left: -8px;
}

.gutters-sm>.col, .gutters-sm>[class*=col-] {
    padding-right: 8px;
    padding-left: 8px;
}
.mb-3, .my-3 {
    margin-bottom: 1rem!important;
}

.bg-gray-300 {
    background-color: #e2e8f0;
}
.h-100 {
    height: 100%!important;
}
.shadow-none {
    box-shadow: none!important;
}

</style>

<div class="container">
    <div class="main-body">
    
          <!-- Breadcrumb -->
          
          <nav aria-label="breadcrumb" class="main-breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="index.html">Home</a></li>
              <li class="breadcrumb-item"><a href="javascript:void(0)">User</a></li>
              <li class="breadcrumb-item active" aria-current="page">User Profile</li>
            </ol>
          </nav>
          <!-- /Breadcrumb -->
    
          <div class="row gutters-sm">
            <div class="col-md-4 mb-3">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex flex-column align-items-center text-center">
                    <img src="{{url('/uploads/student/',auth()->user()->image)}}" alt="student image" class="rounded-circle" width="150">
                    <div class="mt-3">
                      <h4>{{auth()->user()->name}}</h4>
                      <p class="text-secondary mb-1">{{auth()->user()->email}}</p>
                      <p class="text-muted font-size-sm">Phone: {{auth()->user()->phone_number}}</p>
                      <p class="text-muted font-size-sm">Address: {{auth()->user()->address}}</p>
                      <p class="text-muted font-size-sm">Nid: {{auth()->user()->nid}}</p>
                      
                      <!-- <button class="btn btn-primary">Follow</button>
                      <button class="btn btn-outline-primary">Message</button> -->
                    </div>
                  </div>
                </div>
              </div>
            
            </div>
            <div class="col-md-8">
              <div class="card mb-3">
                <div class="card-body">
                  <div class="row">
                  <div class="row" style="margin-top:100px">
  <div class="col-md-1" >
  </div>
  <div class="col-md-10">

                       <h1>Meal List</h1>
 
  <div class="mb-3">
   
  <div class="card-body">
               

                  <table class="table">
  <thead>
    <tr>
      <th scope="col">Student ID</th>
      <th scope="col">Meal Category</th>
      <th scope="col">Meal Fee</th>
      <th scope="col">Meal History</th>
      <th scope="col">Image</th>

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
                              
                              
                          </tr>
                          @endforeach
   
  </tbody>
</table>
              </div>

</div>
  

    @endsection