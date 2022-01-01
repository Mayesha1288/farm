@extends('admin.welcome')


@section('contents')
  <center>  <h1>Hen Details</h1>

   
<p> Type : {{$hen->type}}</p>
<p>Weight: {{$hen->weight}}</p>
<p>Price: <h4><span style="color: orange">BDT {{$hen->price}}</span></h4> </p>
<p>Quantity: {{$hen->quantity}}</p>
<p>Description: {{$hen->description}}</p>
<p>
        <img style="border-radius: 4px;" width="200px;" src=" {{url('/uploads/'.$hen->image)}}" alt="hen image">
    </p>

    <lable>Hen Type:</lable>
    <input type="text" class="form-control" value="{{$hen->type}}">
    <input type="file" class="form-control">

 </center>
 @endsection