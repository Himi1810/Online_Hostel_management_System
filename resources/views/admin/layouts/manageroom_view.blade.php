@extends('admin.master')
@section('main')

<div id="divToPrint">
    <div style="text-align:center;">
<h1>Manage Room Details</h1>
                              
                              <p>Room Name:{{$manageroom->room_name}}</p>
                              <p>Room Type:{{$manageroom->room_type}}</p>
                              <p>Room Fee:{{$manageroom->room_fee}}</p>
                              <p>Image </p>
                                  <img width="300px;" src="{{url('uploads/manageroom/',$manageroom->image)}}" alt="">
                                </p>
                              <p>Room Allocative:{{$manageroom->allocative}}</p>
                              
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