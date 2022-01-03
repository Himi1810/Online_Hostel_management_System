@extends('admin.master')
@section('main')

<div id="divToPrint">
<h1>Manage Room Details</h1>
                              <p>Room Name{{$manageroom->student_id}}</p>
                              <p>Room Name{{$manageroom->room_name}}</p>
                              <p>Room Type{{$manageroom->room_type}}</p>
                              <p>Room Fee{{$manageroom->room_fee}}</p>
                              <p>Image {{$manageroom->image}}</p>
                              <p>Room Name{{$manageroom->allocative}}</p>
                              
    </div>
    <input class="btn btn-primary" type="button" onClick="PrintDiv('divToPrint');" value="Print">





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