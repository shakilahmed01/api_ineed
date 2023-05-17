@extends('layouts.adminapp')
@section('content')
<body class="theme-blush">
  <section class="content">
<h1>All Grocery Merchant Details</h1>

<table class="table">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Name</th>
      <th scope="col">Mobile</th>
      <th scope="col">Address</th>
      <th scope="col">City</th>
      <th scope="col">Post Code</th>
      <th scope="col">Country</th>
      <th scope="col">Shop Name</th>
      <th scope="col">Shop Address</th>
      <th scope="col">Date Of Birth</th>
      <th scope="col">Gender</th>
      <th scope="col">Discount</th>
      <th scope="col">Shop Photo</th>
      <th scope="col">Nid Photo</th>
      <th scope="col">Profile Picture</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach($lists as $list)
    <tr>
      <th scope="row">{{$list->id}}</th>
      <td>{{$list->name}}</td>
      <td>{{$list->mobile}}</td>
      <td>{{$list->address}}</td>
      <td>{{$list->city}}</td>
      <td>{{$list->post_code }}</td>
      <td>{{$list->country}}</td>
      <td>{{$list->shop_name}}</td>
      <td>{{$list->shop_address}}</td>
      <td>{{$list->date_of_birth}}</td>
      <td>{{$list->gender}}</td>
      <td>{{$list->discount}}</td>
      <td><img src="{{ asset('uploads/auths') }}/{{ $list->shop_photo }}" alt=""></td>
      <td><img src="{{ asset('uploads/auths') }}/{{ $list->nid_photo }}" alt=""></td>
      <td><img src="{{ asset('uploads/auths') }}/{{ $list->pro_pic }}" alt=""></td>
      <td>
        <a href="{{ url('/user/edit/') }}/{{ $list->id }}" class=" btn-sm btn-primary">Edit</a>
          <a href="{{ url('/user/delete/') }}/{{ $list->id }}" class=" btn-sm btn-danger">Delete</a>
      </td>
    </tr>
@endforeach
  </tbody>
</table>
</body>
</section>
@endsection
