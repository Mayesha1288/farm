@extends ('admin.welcome')

@section('contents')
<a href="/admin/hens/create" class="btn btn-success">Create Hen list</a>
<a href="{{route('admin.hens.vaccine')}}" class="btn btn-primary">Check the Vaccine </a>
<a href="{{route('admin.hens.food')}}" class="btn btn-info">Check the Food </a>

<table class="table table-hover">
    <thead>
    <tr>
        <th scope="col">Id</th>
        <th scope="col">Type</th>
        <th scope="col">Weight</th>
        <th scope="col">Price</th>
        <th scope="col">Quantity</th>
        <th scope="col">Description</th>
        <th>Image</th>
    </tr>
    </thead>
    <tbody>

      @foreach($henlist as $hen)
    <tr>
        <th > {{$hen->id}}</th>
        <th>{{$hen->type}}</th>
        <th>{{$hen->weight}}</th>
        <th>{{$hen->price}}</th>
        <th >{{$hen->quantity}}</th>
        <th >{{$hen->description}}</th>
        <th>
                    <img src="{{url('/uploads/'.$hen->image)}}" width="100px" alt="hen image">
                </th>
    </tr>
    @endforeach
    <!-- <tr>
        <th scope="row">1</th>
        <td>Mark</td>
        <td>Otto</td>
        <td>@mdo</td>
    </tr>
    <tr>
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