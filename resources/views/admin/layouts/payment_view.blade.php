@extends('admin.master')
@section('main')

<div id="divToPrint">
<div style="text-align:center;">
<h1>Payment</h1>
                               <p>Student ID {{$payment->student_id}}</p>
                              <p>Amount {{$payment->amount}}</p>
                              <p>Payment Date {{$payment->payment_date}}</p>
                              <p>Payment status {{$payment->payment_status}}</p>
                              <p>Payment Method {{$payment->payment_method}}</p>
                            

    
    <input class="btn btn-primary" type="button" onClick="PrintDiv('divToPrint');" value="Print">
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