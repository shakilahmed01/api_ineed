
@extends('layouts.adminapp')

@section('content')
<body class="theme-blush">
<section class="container">


    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('User payments Update') }}</div>

                <div class="body">

                <form  method="POST" action="{{route('payment_update')}}" enctype="multipart/form-data">
                     @csrf

                 <div class="form-group form-float">
                   <input type="hidden" name="id" value="{{$list->id}}">
                   <label for="store_name">User Name</label>
                            <input type="text" class="form-control"  name="user_name" value="{{$list->user_name}}" required>
                        </div>
                        <div class="form-group form-float">
                          <label for="card_name">Card name</label>
                            <input type="text" class="form-control"  name="card_name" value="{{$list->card_name}}" required>
                        </div>
                        <div class="form-group form-float">
                          <label for="card_number">Card Number</label>
                            <input type="text" class="form-control"  name="card_number" value="{{$list->card_number}}" required>
                        </div>
                        <div class="form-group form-float">
                          <label for="store_location">Store name</label>
                            <input type="text" class="form-control"  name="store_name" value="{{$list->store_name}}" required>
                        </div>
                        <div class="form-group form-float">
                          <label for="store_location">Store Location</label>
                            <input type="text" class="form-control"  name="store_location" value="{{$list->store_location}}" required>
                        </div>
                        <div class="form-group form-float">
                          <label for="phone">Mobile Number</label>
                            <input type="text" class="form-control"  name="phone" value="{{$list->phone}}" required>
                        </div>


                        <div class="form-group form-float" >
                          <label for="price">Price</label>
                                  <input type="text" class="form-control"  name="price" value="{{$list->price}}" required>
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
