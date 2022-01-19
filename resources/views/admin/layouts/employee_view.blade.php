@extends('admin.master')
@section('main')

<div id="divToPrint">
<h1>employee List</h1>



                              <p>Name :{{$employee->name}}</p>  
                              <p>NId :{{$employee->nid}}</p>
                            <p> Phone Number :{{$employee->phone_number}}</p>
                             <p>Email:{{$employee->email}}</p>
                                <p>Address: <h4><span style="color: orange">BDT {{$employee->address}}</span></h4> </p>
                               
                               <p>
                                  <img style="border-radius: 4px;" width="200px;" src=" {{url('/uploads/employee'.$employee->image)}}" alt=" image">
                                    </p>

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