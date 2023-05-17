@extends('layouts.adminapp')
@section('content')
<body class="theme-blush">
  <section class="content">
<h1>Summury of Merchant Information</h1>
<table class="table">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Subject</th>
      <th scope="col">Message</th>
      <th scope="col">Action</th>

    </tr>
  </thead>
  <tbody>
    @foreach($lists as $list)
    <tr>
      <th scope="row">{{$list->id}}</th>
      <td>{{$list->name}}</td>
      <td>{{$list->email}}</td>
      <td>{{$list->subject}}</td>
      <td>{{$list->message}}</td>
      <td>
          <a href="{{ url('become_merchant/delete/') }}/{{ $list->id }}" class=" btn-sm btn-danger">Delete</a>
      </td>
    </tr>
@endforeach
  </tbody>
</table>
</body>
</section>
@endsection
