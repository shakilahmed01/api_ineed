@extends('layouts.adminapp')

@section('content')
<body class="theme-blush">
<section class="container">


    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('User Information Update') }}</div>

                <div class="body">
<button onclick="window.print()">Print this page</button>
                <form  method="POST" action="{{route('user_update')}}" enctype="multipart/form-data">
                     @csrf

                 <div class="form-group form-float">
                   <input type="hidden" name="id" value="{{$list->id}}">
                   <label for="name">Mobile</label>
                            <input type="text" class="form-control" placeholder="User mobile" name="mobile" value="{{$list->mobile}}" required>
                        </div>
                        <div class="form-group form-float">
                          <label for="email">Name</label>

                            <input type="text" class="form-control" placeholder="Email" name="name" value="{{$list->name}}" required>
                        </div>

                        <div class="form-group form-float" >
                          <label for="card_name">Shop Name</label>

                                  <input type="text" class="form-control" placeholder="Shop Name" name="shop_name" value="{{$list->shop_name}}" required>
                         </div>

                         <div class="form-group form-float">
                           <label for="card_number">Discount</label>

                             <input type="text" class="form-control" placeholder="Discount" name="discount" value="{{$list->discount }}" required>
                         </div>


                        <div class="form-group form-float">
                          <label for="card_ammount">Discount Type</label>

                            <input name="discount_type"  placeholder="Discount type" class="form-control no-resize" value="{{$list->discount_type}}" required>
                        </div>

                        <div class="form-group form-float">
                          <label for="account">Customer Discount</label>

                            <input name="customer_discount" type="text" class="form-control" placeholder="customer_discount" value="{{$list->customer_discount}}">
                        </div>

                         <div class="form-group form-float">
                           <label for="address">Address</label>

                             <input name="address" type="text" class="form-control" placeholder="Address" value="{{$list->address}}">
                         </div>

                        <div class="form-group form-float">
                          <div class="card">
                             <div class="header">
                                 <h2>Feature Photo</h2>
                             </div>
                             <div class="body">
                                 <input type="file" class="dropify" name="photo"  >
                                 <img src="{{ asset('uploads/auths') }}/{{ $list->photo }}" alt="">
                             </div>
                         </div>
                        </div>



                        <div class="form-group">
                            <div class="checkbox">
                                <input id="checkbox" type="checkbox" name="form_checked">
                                <label for="checkbox">I have read and accept the terms</label>
                            </div>
                        </div>
                        <button class="btn btn-raised btn-primary waves-effect" type="submit">Update</button>

                    </form>

                </div>
            </div>
        </div>
    </body>
</section>

@endsection

