@extends('website.master')
@section('contents')

<div class="container-fluid px-4">

<div id="divToPrint">
<div style="text-align:center;">
          <h1 class="mt-4">Student Payment </h1>
          <!-- <a href="{{route('payment.form')}}" class="btn btn-success" style="float:right;">Add new</a> -->
          <ol class="breadcrumb mb-4">
              <!-- <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li> -->
              <!-- <li class="breadcrumb-item active">Tables</li> -->
          </ol>
          <div class="card mb-4">
              <div class="card-header">
                  <i class="fas fa-table me-1"></i>
                  DataTable
              </div>
              <div>
                
              </div>
              <div class="card-body">
                  

                  <table class="table">
  <thead>
    <tr>
      <th scope="col">Student ID</th>
      <th scope="col">Amount</th>
      <th scope="col">payment Date</th>
      <th scope="col">Payment Method</th>
      

    </tr>
  </thead>
  <tbody>
  @foreach($payments as $payment)
                          <tr>
                              <td>{{$payment->student_id}}</td>
                              <td>{{$payment->amount}}</td>
                              <td>{{$payment->payment_date}}</td>
                              <td>{{$payment->payment_method}}</td>
                              
                              <input class="btn btn-primary" type="button" onClick="PrintDiv('divToPrint');" value="Print">

    </div>

</div>
                              
                              
                          </tr>
                          @endforeach
   
  </tbody>

</table>
              </div>
          </div>
      </div>
      




@endsection

<script language="javascript">
    function PrintDiv(divName) {
        var printContents = document.getElementById(divName).innerHTML;
        var originalContents = document.body.innerHTML;
        document.body.innerHTML = printContents;
        window.print();
        document.body.innerHTML = originalContents;
    }
</script>