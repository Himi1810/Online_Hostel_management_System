@extends('admin.master')
@section('main')

<div id="divToPrint">
<div style="text-align:center;">
<h1>Report Generate</h1> 







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