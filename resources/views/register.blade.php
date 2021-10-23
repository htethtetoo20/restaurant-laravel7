@extends("layout")
@section("content")
<div class="container mt-3">
    <h3 class="text-center">Register</h3>
</div>
<div class="col-md-6 col-sm-9 ml-sm-auto mr-sm-auto">
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
    <label for="exampleInputPassword1">Password</label>
    <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Enter Address">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Contact</label>
    <input type="text" name="contact" class="form-control" id="exampleInputPassword1" placeholder="Enter Address">
  </div>
  <button type="submit" class="btn btn-primary">Register</button>
</form>
</div>
</div>
@endsection