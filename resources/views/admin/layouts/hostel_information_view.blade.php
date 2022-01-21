@extends('admin.master')
@section('main')


<div id="divToPrint">
<div style="text-align:center;">
<h1>Hostel Details</h1>

                              <p>Number of rooms {{$hostel->number_of_rooms}}</p>
                              <p>Hostel Location {{$hostel->hostel_location}}</p>
                              <p>Hostel Type {{$hostel->hostel_type}}</p>
                              <p>Total Rooms {{$hostel->Total_rooms}}</p>
                              <p>Name of the Hostel {{$hostel->name_of_the_hostel}}</p>
                              <p>Image</p>
                              <img width="70px" src="{{url('/uploads/hostel/'.$hostel->image)}}" alt="">
                              </p>
                            
                             

   
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