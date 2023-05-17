@extends('layouts.adminapp')
@section('content')
<body class="theme-blush">
  <section class="content">
<h1>Details of Withdraw Tables</h1>
<form action="{{route('withdraw_search')}}" method="get">
<div class="input-group">
<div class="form-outline">
  <label class="form-label" for="form1">Search</label>
  <input type="search" name="user_mobile" name="status" id="form1" placeholder="Search here" class="form-control" />


</div>
</div>
</form>
<br>
<table class="table">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Merchant Mobile</th>
      <th scope="col">Payment Method</th>
      <th scope="col">Ammount</th>
      <th scope="col">Description</th>
      <th scope="col">Note</th>
      <th scope="col">Date</th>
      <th scope="col">Status</th>
      <th scope="col">Image</th>

    </tr>
  </thead>
  <tbody>
    @foreach($lists as $list)
    <tr>
      <th scope="row">{{$list->id}}</th>
      <td>{{$list->user_mobile}}</td>
      <td>{{$list->payment_method}}</td>
      <td>{{$list->withdraw_ammount}}</td>
      <td>{{$list->description}}</td>
      <td>{{$list->note}}</td>
      <td>{{$list->created_at}}</td>
      <td>
       @if ($list->status == 'Approved')
             <a href="{{url('/withdraw/data')}}/{{$list->id}}/{{$list->status}}" class="btn btn-success">Approved</a>
         @else
             <a href="{{url('/withdraw/data')}}/{{$list->id}}/{{$list->status}}" class="btn btn-danger">Under Review</a>
         @endif

      </td>
      <td>
      <img src="{{ asset('public/uploads/withdraws') }}/{{ $list->withdraw_photo }}" alt="">
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
