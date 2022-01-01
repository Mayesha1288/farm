@extends('admin.welcome')


@section('contents')
<center>
    <h1>Customer Details</h1>

    <p> Customer ID :     {{$customer->id}}</p>  
<p> Customer Name :       {{$customer->customer_name}}}</p>
<p> Address :        {{$customer->address}}</p>
<p> Phone number :     {{$customer->phone_number}}</p>
<p>Products Customer Brought:      {{$customer->customer_description}}</p>




</center>
    <!-- <lable>Record Type:</lable>
    <input type="text" class="form-control" value="{{$customer->type}}">
    <input type="file" class="form-control"> -->
@endsection