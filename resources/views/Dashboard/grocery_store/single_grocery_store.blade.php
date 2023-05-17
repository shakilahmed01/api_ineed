
@extends('layouts.adminapp')

@section('content')
<body class="theme-blush">
<section class="container">


    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Grocery Store Update') }}</div>

                <div class="body">

                <form  method="POST" action="{{route('grocery_update')}}" enctype="multipart/form-data">
                     @csrf

                 <div class="form-group form-float">
                   <input type="hidden" name="id" value="{{$list->id}}">
                   <label for="store_name">Store Name</label>
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


                        <div class="form-group form-float">
                          <div class="card">
                             <div class="header">
                                 <h2>Feature Photo</h2>
                             </div>
                             <div class="body">
                                 <input type="file" class="dropify" name="photo"  >
                                 <img src="{{ asset('uploads/grocery_stores') }}/{{ $list->photo }}" alt="">
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
