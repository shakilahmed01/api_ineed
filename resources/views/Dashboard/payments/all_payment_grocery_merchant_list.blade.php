@extends('layouts.adminapp')
@section('content')
<body class="theme-blush">
  <section class="content">
<h1>All Grocery Merchant Details</h1>

<table class="table">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Seller Number</th>
      <th scope="col">Buyer Number</th>
      <th scope="col">Card Name</th>
      <th scope="col">Card Number</th>
      <th scope="col">Store Name</th>
      <th scope="col">Store Location</th>
      <th scope="col">Price</th>
      <th scope="col">Discount</th>
      <th scope="col">Discount Price</th>
      <th scope="col">Date</th>

    </tr>
  </thead>
  <tbody>
    @foreach($lists as $list)
    <tr>
      <th scope="row">{{$list->id}}</th>
      <td>{{$list->seller_phone_number}}</td>
      <td>{{$list->buyer_phone_number}}</td>
      <td>{{$list->card_name}}</td>
      <td>{{$list->card_number}}</td>
      <td>{{$list->store_name }}</td>
      <td>{{$list->store_location}}</td>
      <td>{{$list->price}}</td>
      <td>{{$list->discount}}</td>
      <td>{{$list->discount_price}}</td>
      <td>{{$list->created_at}}</td>

    </tr>
@endforeach
  </tbody>
</table>
</body>
</section>
@endsection
