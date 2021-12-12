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

  <!-- first we will write the variables name and then write the name which isgiven in the  database table -->
    <!-- the first one is the one which is written in compact and the next one is variable -->
    <!-- foreach is used for loop -->
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
    
  </tbody>
</table>
@endsection