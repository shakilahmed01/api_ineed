@extends('layouts.adminapp')
@section('content')
<body class="theme-blush">
  <section class="content">
<h1>category Details</h1>
<table class="table">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Category Name</th>
      <th scope="col">Discount</th>

      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach($lists as $list)
    <tr>
      <th scope="row">{{$list->id}}</th>
      <td>{{$list->category_name}}</td>
      <td>{{$list->category_discount}}</td>

      <td>
        <a href="{{ url('/category/edit') }}/{{ $list->id }}" class=" btn-sm btn-primary">Edit</a>
          
      </td>
    </tr>
@endforeach
  </tbody>
</table>
</body>
</section>
@endsection
