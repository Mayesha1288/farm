@extends('admin.welcome')


@section('contents')
    <h1>Egg Details</h1>

   
<p> Type : {{$egg->type}}</p>
<p>Price: <h4><span style="color: orange">BDT {{$egg->price}}</span></h4> </p>
<p>Quantity: {{$egg->quantity}}</p>

<p>
        <img style="border-radius: 4px;" width="200px;" src=" {{url('/uploads/'.$egg->image)}}" alt="egg image">
    </p>

    <lable>Egg Type:</lable>
    <input type="text" class="form-control" value="{{$egg->type}}">
    <input type="file" class="form-control">

@endsection