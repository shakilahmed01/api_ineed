@extends('layouts.adminapp')
@section('content')
<body class="theme-blush">
  <section class="content">
<h1>User membership Approval</h1>
 <div class="d-flex justify-content-between">
   <form action="{{route('membership_approval_search_mobile')}}" method="get" class="mx-3">
   <div class="input-group">
   <div class="form-outline">
     <label class="form-label" for="form1">Search with Mobile Number</label>
     <input type="search" name="user_mobile" id="form1" placeholder="Search" class="form-control" />
   </div>
   </div>
   </form>
   <form action="{{route('membership_approval_search_card')}}" method="get" class="">
   <div class="input-group">
   <div class="form-outline">
     <label class="form-label" for="form1">Search with Card Number</label>
     <input type="search" name="card_number" id="form2" placeholder="Search" class="form-control" />
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
      <td>
        @if ($list->status == 'Approved')
             <a href="{{url('/membership/data')}}/{{$list->id}}/{{$list->status}}" class="btn btn-success">Approved</a>
         @else
             <a href="{{url('/membership/data')}}/{{$list->id}}/{{$list->status}}" class="btn btn-danger">Processing</a>
         @endif

      </td>

    </tr>
@endforeach
  </tbody>
</table>
</body>
</section>

@endsection
