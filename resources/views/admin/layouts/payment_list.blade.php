@extends('admin.master')

@section('main')


      <div class="container-fluid px-4">
          <h1 class="mt-4">Payment</h1>
          <a href="{{route('payment.form')}}" class="btn btn-success" style="float:right;">Add new</a>
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
                              <th>Student Id</th>
                              <th>Amount</th>
                              <th>Payment Date</th>
                              <th>payment Status</th>
                              <th>payment Method</th>
                              
                          </tr>
                      </thead>
                     
                      <tbody>
                      @foreach($payments as $payment)
                          <tr>
                              <td>{{$payment->student_id}}</td>
                              <td>{{$payment->amount}}</td>
                              <td>{{$payment->payment_date}}</td>
                              <td>{{$payment->payment_status}}</td>
                              <td>{{$payment->payment_method}}</td>
                              
                          </tr>
                          @endforeach
                      </tbody>
                  </table>
              </div>
          </div>
      </div>
               

@endsection