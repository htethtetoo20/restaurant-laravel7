@extends("layout")
@section("content")
<div class="container mt-3">
@if(Session::has("status"))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>{{Session::get("status")}}</strong> 
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
  @endif
<table class="table mt-3">
    <h3 class="text-center">Restaurant List</h3>
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Address</th>
      <th scope="col">Operation</th>
    </tr>
  </thead>
  <tbody>
      @foreach($data as $item)
    <tr>
      <th scope="row">{{$item->id}}</th>
      <td>{{$item->name}}</td>
      <td>{{$item->email}}</td>
      <td>{{$item->address}}</td>
      <td>
      <a href="/delete/{{$item->id}}"><i class="fa fa-trash"></i></a>
        <a href="/edit/{{$item->id}}"><i class="fa fa-edit"></i></a>
      </td>
    </tr>
        @endforeach
   
  </tbody>
</table>
</div>
@endsection