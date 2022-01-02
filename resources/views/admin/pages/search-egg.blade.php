@extends('admin.welcome')

@section('contents')
<h1> Hi .this is the searched egg list</h1>


<!-- to link this button in this route -->



<a href="#" class="btn btn-warning" onclick="PrintDiv('PrintTableArea')">Print</a>

<div id="PrintTableArea">

<table class="table table-hover">
    <thead>
    <tr>
        <th scope="col">Id</th>
        <th scope="col"> Type</th>
        <th scope="col">Price</th>
        <th scope="col">Quantity</th>
        <th> Image</th>
        <th scope="col">Action</th>
    </tr>
    </thead>
    <tbody>
<!-- first we will write the variables name and then write the name which isgiven in the  database table -->
    <!-- the first one is the one which is written in compact and the next one is variable -->
    <!-- foreach is used for loop -->

       @foreach($eggs as $egg)
    <tr>
       
        <th > {{$egg->id}}</th>
        <th>{{$egg->type}}</th>
        <th>{{$egg->price}}</th>
        <th>{{$egg->quantity}}</th>
        <th>
                    <img src="{{url('/uploads/'.$egg->image)}}" width="100px" alt="egg image">
                </th>

                <td>
                        <a class="btn btn-primary" href="{{route('admin.egg.details',$egg->id)}}">View</a>
                        <a class="btn btn-danger" href="{{route('admin.egg.delete',$egg->id)}}">Delete</a>
                    </td>
    </tr>
    @endforeach
    </tbody>
</table>
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

@endsection