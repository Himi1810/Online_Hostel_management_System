@extends('admin.master')
@section('main')

<div id="divToPrint">
<div style="text-align:center;">
<h1>employee List</h1>



                              <p>Name :{{$employee->name}}</p>  
                              <p>NId :{{$employee->nid}}</p>
                            <p> Phone Number :{{$employee->phone_number}}</p>
                             <p>Email:{{$employee->email}}</p>
                                <p>Address: {{$employee->address}} </p>
                               <p>Image</p>
                                  <img style="border-radius: 4px;" width="200px;" src=" {{url('/uploads/employee'.$employee->image)}}" alt=" image">
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