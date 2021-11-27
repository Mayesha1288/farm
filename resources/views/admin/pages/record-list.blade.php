@extends ('admin.welcome')

@section('contents')
<a href="/admin/records/create" class="btn btn-success">Create Record list</a>
<table class="table table-hover">
  <thead>
    <tr>
    <th scope="col">ID</th>
      <th scope="col">Hens Died</th>
      <th scope="col">Sick Hens</th>
      <th scope="col">vaccinated hens</th>
      <th scope="col">eggs collected</th>
      <th scope="col">eggs damaged</th>
    </tr>
  </thead>
  <tbody>
  @foreach($recordlist as $record)
    <tr>
    <th > {{$record->id}}</th>
        <th > {{$record->hens_died}}</th>
        <th>{{$record->sick_hens}}</th>
        <th>{{$record->vaccinated_hens}}</th>
        <th>{{$record->eggs_collected}}</th>
        <th >{{$record->eggs_damaged}}</th>
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