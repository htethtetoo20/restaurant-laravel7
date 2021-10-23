@extends("layout")
@section("content")
<div class="container mt-3">
<h3 class="text-center">Add Restaurant</h3>

<div class="col-md-6 col-sm-9 ml-sm-auto mr-sm-auto">
@if(Session::has("status"))
<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>{{Session::get("status")}}</strong> 
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
  @endif
<form method="post">
@csrf
  <div class="form-group">
        <label for="exampleInputEmail1">Name</label>
        <input type="name" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter your Name">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Email </label>
    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Address</label>
    <input type="text" name="address" class="form-control" id="exampleInputPassword1" placeholder="Enter Address">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
</div>
@endsection