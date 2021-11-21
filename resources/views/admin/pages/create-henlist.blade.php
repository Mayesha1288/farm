@extends ('admin.welcome')

@section('contents')

<form  action="{{route('admin.hens.store')}}" method="post">
  @csrf
  <div class="form-group">
    <label for="exampleInputEmail1">Hen Type</label>
    <input name="type" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Hen type">
    <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Hen Weight</label>
    <input name="weight" type="number" step="0.01" class="form-control" id="exampleInputPassword1" placeholder="Hen Weight">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Hen Price</label>
    <input name="price" type="number" class="form-control" id="exampleInputPassword1" placeholder="Hen Price">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Hen Quantity</label>
    <input name="quantity" type="number" class="form-control" id="exampleInputPassword1" placeholder="Quantity">
  </div>

  <!-- <div class="form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div> -->
  <button type="submit" class="btn btn-primary">Let's Enter this</button>
</form>


@endsection