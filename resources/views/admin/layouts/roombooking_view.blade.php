@extends('admin.master')
@section('main')

<div id="divToPrint">
<div style="text-align:center;">
<h1>Booking Room Details</h1>

                              <p>Seat name {{$roombooking->room->room_name}}</p>
                              <p>Student name {{$roombooking->student->name}}</p>
                              <p>Booking Date {{$roombooking->booking_date}}</p>
                              <p>Room status {{$roombooking->room->allocative}}</p>
                              <p>Room Fee {{$roombooking->room->room_fee}}</p>
                              <p>Booking Status {{$roombooking->status}}</p>
                             


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