@extends ('admin.welcome')

@section('contents')
<a href="/admin/stock/create" class="btn btn-success">Create Stock list</a>
<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">Type</th>
      <th scope="col">Price</th>
      <th scope="col">Quantity</th>
      <th scope="col">Total</th>
    </tr>
  </thead>
  <tbody>

  @php $total  = 0; @endphp
    @foreach($hens as $hen)
    @php
      $quantity = $hen->quantity;
      $total = $total + $quantity;
    @endphp
    <tr>
      <th>{{$hen->type}}</th>
      <td>{{$hen->price}}</td>
      <td>{{$hen->quantity}}</td>
      <td>{{$total}}</td>
    </tr>
    @endforeach
  </tbody>
</table>

@endsection