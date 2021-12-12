@extends ('admin.welcome')
@section('contents')

<style>
  input:focus {
    outline: none !important;
    border:2px solid 	turquoise !important;
    box-shadow: 0 0 10px #719ECE;
}
</style>



<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Customer Information</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Customer Information Inserted Succesfully!
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        
      </div>
    </div>
  </div>
</div>

<form  action="{{route('admin.customer.store')}}" method="post" >
  @csrf
<div class="form-group">
    <label for="exampleInputPassword1">Customer Name</label>
    <input required name="name" type="text"  class="form-control" id="exampleInputPassword1" placeholder="Customer Name">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Customer Address</label>
    <input  required name="address" type="text" class="form-control" id="exampleInputPassword1" placeholder="Customer Address">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Phone Number</label>
    <input required name="number" type="number" class="form-control" id="exampleInputPassword1" placeholder="Phone Number">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Customer description</label>
    <input required name="description" type="text" class="form-control" id="exampleInputPassword1" placeholder="">
  </div>

  <br>

  <!-- Button trigger modal -->
<button type="submit" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
  Launch demo modal
</button>
  <!-- <button type="submit" class="btn btn-info">Let's Insert  this</button> -->
</form>

@endsection