@extends('layouts.adminapp')
@section('content')
<body class="theme-blush">
  <section class="content">
<h1>Details of Offers</h1>
<table class="table">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Store Name</th>
      <th scope="col">Store Location</th>
      <th scope="col">Discount</th>
      <th scope="col">Image</th>
      <th scope="col">Action</th>

    </tr>
  </thead>
  <tbody>
    @foreach($lists as $list)
    <tr>
      <th scope="row">{{$list->id}}</th>
      <td>{{$list->store_name}}</td>
      <td>{{$list->store_location}}</td>
      <td>{{$list->discount}}</td>
      <td>
      <img src="{{ asset('uploads/offers') }}/{{ $list->photo }}" alt="">
      </td>
      <td>
        <a href="{{ url('/offer/edit/') }}/{{ $list->id }}" class=" btn-sm btn-primary">Edit</a>
          <a href="{{ url('offer/delete') }}/{{ $list->id }}" class=" btn-sm btn-danger">Delete</a>
      </td>
    </tr>
@endforeach
  </tbody>
</table>
</body>
</section>



<body class="theme-blush">
  <section class="content">
<h1>Trashed Offers</h1>
<table class="table">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Store Name</th>
      <th scope="col">Store Location</th>
      <th scope="col">Discount</th>
      <th scope="col">Image</th>
      <th scope="col">Action</th>

    </tr>
  </thead>
  <tbody>
    @foreach($trashed_offers as $trashed_offer)
    <tr>
      <th scope="row">{{$trashed_offer->id}}</th>
      <td>{{$trashed_offer->store_name}}</td>
      <td>{{$trashed_offer->store_location}}</td>
      <td>{{$trashed_offer->discount}}</td>
      <td>
      <img src="{{ asset('uploads/offers') }}/{{ $trashed_offer->photo }}" alt="">
      </td>
      <td>
        <a href="{{ url('/offer/restore/') }}/{{ $trashed_offer->id }}" class=" btn-sm btn-success">Restore</a>

      </td>
    </tr>
@endforeach
  </tbody>
</table>
</body>
</section>
@endsection
