@extends('layouts.adminapp')
@section('content')
<body class="theme-blush">
  <section class="content">
<h1>Details Discount store</h1>
<table class="table">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Store Name</th>
      <th scope="col">Store Location</th>
      <th scope="col">Mobile Number</th>
      <th scope="col">Price</th>
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
      <td>{{$list->phone}}</td>
      <td>{{$list->price}}</td>
      <td>
      <img src="{{ asset('uploads/stores') }}/{{ $list->photo }}" alt="">
      </td>
      <td>
        <a href="{{ url('/discount/store/edit') }}/{{ $list->id }}" class=" btn-sm btn-primary">Edit</a>
          <a href="{{ url('discount/store/delete') }}/{{ $list->id }}" class=" btn-sm btn-danger">Delete</a>
      </td>
    </tr>
@endforeach
  </tbody>
</table>
</body>
</section>



<body class="theme-blush">
  <section class="content">
<h1>Trashed Discount store</h1>
<table class="table">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Store Name</th>
      <th scope="col">Store Location</th>
      <th scope="col">Mobile Number</th>
      <th scope="col">Price</th>
      <th scope="col">Image</th>
      <th scope="col">Action</th>

    </tr>
  </thead>
  <tbody>
    @foreach($trashed_dis as $list)
    <tr>
      <th scope="row">{{$list->id}}</th>
      <td>{{$list->store_name}}</td>
      <td>{{$list->store_location}}</td>
      <td>{{$list->phone}}</td>
      <td>{{$list->price}}</td>
      <td>
      <img src="{{ asset('uploads/stores') }}/{{ $list->photo }}" alt="">
      </td>
      <td>
        <a href="{{ url('discount/store/restore') }}/{{ $list->id }}" class=" btn-sm btn-success">Restore</a>

      </td>
    </tr>
@endforeach
  </tbody>
</table>
</body>
</section>
@endsection
