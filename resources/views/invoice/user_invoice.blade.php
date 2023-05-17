@extends('layouts.adminapp')
@section('content')
<body class="theme-blush">
  <section class="content">
<h1>invoice Details</h1>
 <div class="d-flex justify-content-between">
   <form action="#" method="get" class="mx-3">
   <div class="input-group">
   <div class="form-outline">
     <label class="form-label" for="form1">Search with Mobile Number</label>
     <input type="search" name="user_mobile" id="form1" placeholder="Search" class="form-control" />
   </div>
   </div>
   </form>
 </div>
<br>
<table class="table">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Mobile</th>
      <th scope="col">Current Month</th>
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
      <td>{{$list->current_month}}</td>
      <td>{{$list->relationBetweenCategory->category_name}}</td>
      <td>{{$list->relationBetweenSubCategory->subcategory_card_number }}</td>
      <td>{{$list->card_ammount}}</td>
      <td>{{$list->limit}}</td>
      <td>{{$list->status}}</td>
      <td>{{$list->address}}</td>
      <td><img src="{{ asset('uploads/users') }}/{{ $list->photo }}" alt=""></td>
      <td>
        <a href="{{ url('/page/invoice/') }}/{{ $list->id }}" class=" btn-sm btn-primary">PDF</a>

      </td>
    </tr>
@endforeach
  </tbody>
</table>
 <div class="card">
                        <div class="body">
                             {{ $lists->links() }}
                        </div>
                    </div>
</body>
</section>

@endsection
