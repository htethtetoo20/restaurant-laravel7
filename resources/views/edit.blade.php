@extends("layout")
@section("content")
<div class="container mt-3">
    <h3 class="text-center">Edit Restaurant</h3>
</div>
<div class="col-md-6 col-sm-9 ml-sm-auto mr-sm-auto">
<form method="post" action="/edit">
@csrf
<div class="form-group">
       
        <input type="hidden" name="id" value="{{$data->id}}" class="form-control">
  </div>
  <div class="form-group">
        <label for="exampleInputEmail1">Name</label>
        <input type="name" name="name" value="{{$data->name}}" class="form-control" id="name" placeholder="Enter your Name">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Email </label>
    <input type="email" name="email" value="{{$data->email}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Address</label>
    <input type="text" name="address"  value="{{$data->address}}" class="form-control" id="exampleInputPassword1" placeholder="Enter Address">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
</div>
@endsection