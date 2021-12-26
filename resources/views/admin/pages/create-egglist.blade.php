@extends ('admin.welcome')

@section('contents')

<style>
  input:focus {
    outline: none !important;
    border:2px solid 	rgb(77, 0, 0) !important;
    box-shadow: 0 0 10px #719ECE;
}
</style>


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




<form action="{{route('admin.eggs.store')}}" method='post' enctype="multipart/form-data">

  @csrf
  <div class="form-group">
    <label for="exampleInputEmail1">Egg Type</label>
    <input required name="egg_type" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">
    <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Egg Price</label>
    <input required name="egg_price" type="text" class="form-control" id="exampleInputPassword1" placeholder="">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Egg Quantity</label>
    <input required name="egg_quantity" type="text" class="form-control" id="exampleInputPassword1" placeholder="">
  </div>
  <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Upload Eggs Image</label>
            <input required name="image" type="file" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
  <!-- <div class="form-group">
    <label for="exampleInputPassword1">Hen Quantity</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Quantity">
  </div> -->

  <!-- <div class="form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div> -->
  <button type="submit" class="btn btn-primary" style="margin-top: 10px;">Submit</button>
</form>

@endsection


