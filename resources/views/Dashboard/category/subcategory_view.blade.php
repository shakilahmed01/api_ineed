@extends('layouts.adminapp')
@section('content')
<body class="theme-blush">
  <section class="content">
<h1>Subcategory Details</h1>
<table class="table">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Card Number</th>
      <th scope="col">category Id</th>

      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach($lists as $list)
    <tr>
      <th scope="row">{{$list->id}}</th>
      <td>{{$list->subcategory_card_number}}</td>
      <td>{{$list->category_id}}</td>

      <td>
        <a href="{{ url('/subcategory/edit') }}/{{ $list->id }}" class=" btn-sm btn-primary">Edit</a>
          
      </td>
    </tr>
@endforeach
  </tbody>
</table>
</body>
</section>
@endsection
