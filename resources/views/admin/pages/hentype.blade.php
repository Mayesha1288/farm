@extends('admin.welcome')

@section('contents')
<h1> Hi .this is the Hen type list</h1>
<a href="{{route('admin.hentype.create')}}" class="btn btn-success">Create the Hen Type</a>

<table class="table table-hover">
    <thead>
    <tr>
        <th scope="col">Id</th>
        <th scope="col">Hen  Type</th>
        
    </tr>
    </thead>
    <tbody>
<!-- first we will write the variables name and then write the name which isgiven in the  database table -->
    <!-- the first one is the one which is written in compact and the next one is variable -->
    <!-- foreach is used for loop -->
       @foreach($types as $type)
    <tr>
        <th > {{$type->id}}</th>
        <th>{{$type->hentype}}</th>

        @endforeach
        </tbody>
</table>

@endsection