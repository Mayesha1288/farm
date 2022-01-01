@extends('admin.welcome')


@section('contents')


<center>
    <h1>Egg Details</h1>
    <a href="#" class="btn btn-warning" onclick="printDiv('PrintTableArea')">Print</a>

<div id="PrintTableArea">
<p> Type : {{$egg->type}}</p>
<p>Price: <h4><span style="color: orange">BDT {{$egg->price}}</span></h4> </p>
<p>Quantity: {{$egg->quantity}}</p>

<p>
        <img style="border-radius: 4px;" width="200px;" src=" {{url('/uploads/'.$egg->image)}}" alt="egg image">
    </p>


</div>

<script language="javascript">
    function PrintDiv(divName) {
        var printContents = document.getElementById(divName).innerHTML;
        var originalContents = document.body.innerHTML;
        document.body.innerHTML = printContents;
        window.print();
        document.body.innerHTML = originalContents;
    }
</script>
</center>
@endsection