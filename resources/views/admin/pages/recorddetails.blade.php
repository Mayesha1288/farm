@extends('admin.welcome')


@section('contents')
    <h1>Record Details</h1>

    <p> Date :{{$record->date}}</p>  
<p> Sick Hens :{{$record->sick_hens}}</p>
<p> Hens Died :{{$record->hens_died}}</p>
<p> Vaccinated Hens :{{$record->vaccinated_hens}}</p>
<p>Eggs Collected :{{$record->eggs_collected}}</p>
<p >Eggs Damaged:{{$record->eggs_damaged}}</p>




    <lable>Record Type:</lable>
    <input type="text" class="form-control" value="{{$record->type}}">
    <input type="file" class="form-control">
@endsection