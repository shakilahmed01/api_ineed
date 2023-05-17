@extends('layouts.app')
@section('content')
<div class="container">
  <h1>User Information</h1>
<form action="{{route('add_user')}}" method="post">
  @csrf
  <div class="form-group col-md-4">
    <label for="exampleInputEmail1">Customer</label>
    <input type="name" name="customer" class="form-control" id="customer"  placeholder="Customer Name">

  </div>

  <div class="form-group col-md-4">
    <label for="exampleInputEmail1">Basic</label>
    <input type="name" name="basic" class="form-control" id="basic"  placeholder="Basic">

  </div>

  <div class="form-group col-md-4">
    <label for="exampleInputEmail1">Partner</label>
    <input type="name" name="partner" class="form-control" id="partner"  placeholder="Partner">

  </div>

  <div class="form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
@endsection
