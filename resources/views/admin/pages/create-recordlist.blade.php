@extends ('admin.welcome')

@section('contents')
<form>
  <div class="form-group">
    <label for="exampleInputEmail1">Total Hens died</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">
    <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Total Hens Sick</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Total hens given vaccine</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Total Eggs Collected</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="">
  </div>

  <div class="form-group">
    <label for="exampleInputPassword1">Total Eggs Damaged</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="">
  </div>
 

  <!-- <div class="form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div> -->
  <button type="submit" class="btn btn-primary">Let's Enter this</button>
</form>


@endsection
