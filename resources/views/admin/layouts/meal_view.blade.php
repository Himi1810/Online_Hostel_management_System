@extends('admin.master')
@section('main')

<div id="divToPrint">
<div style="text-align:center;">
<h1>Meal Details</h1>
                             <p>Student Id: {{$meal->student_id}}</p>

                              <p>Meal Category: {{$meal->meal_category}}</p>
                              <p>Meal Fee :{{$meal->meal_fee}}</p>
                              
                              <p>Image</p>
                                  <img width="100px" src="{{url('/uploads/meal/'.$meal->image)}}" alt="">
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