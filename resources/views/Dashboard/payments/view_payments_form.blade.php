@extends('layouts.adminapp')
@section('content')
<body class="theme-blush">
  <section class="content">
<h1>Details of User Payments</h1>
<table class="table">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">User Name</th>
      <th scope="col">Card Name</th>
      <th scope="col">Card Number</th>
      <th scope="col">Store Name</th>
      <th scope="col">Store Location</th>
      <th scope="col">Mobile Number</th>
      <th scope="col">Ammount</th>
      <th scope="col">Discount</th>
      <th scope="col">Discount Price</th>
      <th scope="col">Action</th>

    </tr>
  </thead>
  <tbody>
    @foreach($lists as $list)
    <tr>
      <th scope="row">{{$list->id}}</th>
      <td>{{$list->relationBetweenUser->name}}</td>
      <td>{{$list->relationBetweenCategory->category_name}}</td>
      <td>{{$list->relationBetweenSubCategory->subcategory_card_number}}</td>
      <td>{{$list->store_name}}</td>
      <td>{{$list->store_location}}</td>
      <td>{{$list->phone}}</td>
      <td>{{$list->price}}</td>
      <td>{{$list->discount}}%</td>
      <td>{{$list->discount_price}}</td>

      <td>
        <a href="{{ url('payments/edit/') }}/{{ $list->id }}" class=" btn-sm btn-primary">Edit</a>
          <a href="{{ url('payments/delete/') }}/{{ $list->id }}" class=" btn-sm btn-danger">Delete</a>
      </td>
    </tr>
@endforeach
  </tbody>
</table>
</body>
</section>
@endsection
