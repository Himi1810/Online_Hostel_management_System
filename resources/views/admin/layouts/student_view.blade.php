@extends('admin.master')
@section('main')

<div id="divToPrint">
    <div style="text-align:center;">
<h1>Student Details</h1>

                              <p>Name: {{$student->name}}</p>
                              <p>NId: {{$student->nid}}</p>
                              <p>Phone Number: {{$student->phone_number}}</p>
                              <p>Email: {{$student->email}}</p>
                              <p>Address: {{$student->address}}</p>
                              <p>Image</p>
                                  <img width="100px" src="{{url('/uploads/student/'.$student->image)}}" alt="">
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