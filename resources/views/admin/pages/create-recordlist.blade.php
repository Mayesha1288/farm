@extends ('admin.welcome')

@section('contents')


@if ($errors->any())
        @foreach ($errors->all() as $error)
            <div>
                <p class="alert alert-danger">{{$error}}</p>
            </div>
        @endforeach
    @endif

    @if(session()->has('msg'))
        <p class="alert alert-success">{{session()->get('msg')}}</p>
    @endif


<form   action="{{route('admin.records.store')}}" method="post">
  @csrf
  <div class="form-group">
    <label for="exampleInputEmail1">Total Hens died</label>
    <input required name="hens_died" type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">
    <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Total Hens Sick</label>
    <input name="sick_hens" type="number" class="form-control" id="exampleInputPassword1" placeholder="">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Total hens given vaccine</label>
    <input name="vaccinated_hens" type="number" class="form-control" id="exampleInputPassword1" placeholder="">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Total Eggs Collected</label>
    <input name="eggs_collected" type="number" class="form-control" id="exampleInputPassword1" placeholder="">
  </div>

  <div class="form-group">
    <label for="exampleInputPassword1">Total Eggs Damaged</label>
    <input name="eggs_damaged"  type="number" class="form-control" id="exampleInputPassword1" placeholder="">
  </div>
 

  <!-- <div class="form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div> -->
  <button type="submit" class="btn btn-primary">Let's Enter this</button>
</form>


@endsection
