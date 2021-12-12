@extends('admin.welcome')

@section('contents')
<h1> Hi .this is the egg list</h1>


<!-- to link this button in this route -->
<a href="{{route('admin.eggs.create')}}" class="btn btn-success">Create Egg list</a>

<table class="table table-hover">
    <thead>
    <tr>
        <th scope="col">Id</th>
        <th scope="col"> Type</th>
        <th scope="col">Price</th>
        <th scope="col">Quantity</th>
        <th> Image</th>
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
    </tr>
    @endforeach
    
    </tbody>
</table>

@endsection