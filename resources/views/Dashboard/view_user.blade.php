@extends('layouts.adminapp')
@section('content')
<body class="theme-blush">
  <section class="content">
<h1>User Details</h1>
<table class="table">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Mobile</th>
      <th scope="col">Email</th>
      <th scope="col">Card Name</th>
      <th scope="col">Card Number</th>
      <th scope="col">Card Amount</th>
      <th scope="col">Limit per month</th>
      <th scope="col">Status</th>
      <th scope="col">address</th>
      <th scope="col">Image</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach($lists as $list)
    <tr>
      <th scope="row">{{$list->id}}</th>
      <td>{{$list->user_mobile}}</td>
      <td>{{$list->email}}</td>
      <td>{{$list->relationBetweenCategory->category_name}}</td>
      <td>{{$list->relationBetweenSubCategory->subcategory_card_number }}</td>
      <td>{{$list->card_ammount}}</td>
      <td>{{$list->limit}}</td>
      <td>{{$list->status}}</td>
      <td>{{$list->address}}</td>
      <td><img src="{{ asset('uploads/users') }}/{{ $list->photo }}" alt=""></td>
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

<body class="theme-blush">
  <section class="content">
<h1>Trashed User</h1>
<table class="table">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Mobile</th>
      <th scope="col">Email</th>
      <th scope="col">Card Name</th>
      <th scope="col">Card Number</th>
      <th scope="col">Card Amount</th>
      <th scope="col">Limit per month</th>
      <th scope="col">Status</th>
      <th scope="col">address</th>
      <th scope="col">Image</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach($trashed_user as $list)
    <tr>
      <th scope="row">{{$list->id}}</th>
      <td>{{$list->user_mobile}}</td>
      <td>{{$list->email}}</td>
      <td>{{$list->relationBetweenCategory->category_name}}</td>
      <td>{{$list->relationBetweenSubCategory->subcategory_card_number }}</td>
      <td>{{$list->card_ammount}}</td>
      <td>{{$list->limit}}</td>
      <td>{{$list->status}}</td>
      <td>{{$list->address}}</td>
      <td><img src="{{ asset('uploads/users') }}/{{ $list->photo }}" alt=""></td>
      <td>
        <a href="{{ url('user/restore') }}/{{ $list->id }}" class=" btn-sm btn-success">Restore</a>

      </td>
    </tr>
@endforeach
  </tbody>
</table>
</body>
</section>
@endsection