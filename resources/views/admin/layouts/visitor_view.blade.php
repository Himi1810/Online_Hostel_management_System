                              
@extends('admin.master')
@section('main')

<div id="divToPrint">
<div style="text-align:center;">
<h1>Visitor Details</h1>                   
                              
                              
                              <p>Name {{$visitor->name}}</p>
                              <p>NId {{$visitor->nid}}</p>
                              <p>Phone Number {{$visitor->phone_number}}</p>
                              <p>Relation {{$visitor->relation}}</p>
                              <p>Address {{$visitor->address}}</p>
                              <p>
                              <img width="100px" src="{{url('/uploads/visitor/'.$visitor->image)}}" alt="">
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