@extends('layouts.app')
@section('content')
<div class="container">
  <h1>Customer Information</h1>
<form action="{{route('add_customer')}}" method="post">
  @csrf
  <div class="form-group col-md-4">
    <label for="exampleInputEmail1">Name</label>
    <input type="name" name="name" class="form-control" id="name"  placeholder="Enter Name">

  </div>
  <div class="form-group col-md-4">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
@endsection
