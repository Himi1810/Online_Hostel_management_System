@extends('admin.master')
@section('main')

<div id="divToPrint">
<div style="text-align:center;">
<h1>User Request Details</h1>

                             <p>Student ID:{{$usertable->student_id}}</p>
                              <p>Seat ID:{{$usertable->seat_id}}</p>
                              <p>Booking Date:{{$usertable->booking_date}}</p>
                              <p>Email:{{$usertable->email}}</p>
                              <p>Description:{{$usertable->description}}</p>
                             
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