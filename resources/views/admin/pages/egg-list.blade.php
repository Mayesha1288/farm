@extends('admin.welcome')

@section('contents')
<h1> Hi .this is the egg list</h1>
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
    <!-- <tr>
        <th scope="row">2</th>
        <td>Jacob</td>
        <td>Thornton</td>
        <td>@fat</td>
    </tr>
    <tr>
        <th scope="row">3</th>
        <td colspan="2">Larry the Bird</td>
        <td>@twitter</td>
    </tr> -->
    </tbody>
</table>

@endsection