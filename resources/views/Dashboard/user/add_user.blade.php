@extends('layouts.app')

@section('content')
<div class="container">

  {{-- Add Category --}}
              <!-- Button trigger modal -->
                  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#staticBackdrop">
                  Add Category
                  </button>

                  <!-- Modal -->
                  <div class="modal fade" id="staticBackdrop" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                      <div class="modal-content">
                      <div class="modal-header">
                          <h5 class="modal-title" id="staticBackdropLabel">Add Category</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                          </button>
                      </div>

                      <div class="modal-body">
                      <form id="category_form" method="POST" action="{{route('cat_create')}}">
                          @csrf
                              <div class="form-group form-float">
                              <input type="text" class="form-control" placeholder="Category Name" name="category_name" required>
                          </div>
                          <div class="form-group form-float">
                          <input type="text" class="form-control" placeholder="Category Discount" name="category_discount" required>
                      </div>
                          <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                              <button type="submit" id="btn-submit" class="btn btn-primary">Submit</button>
                          </div>
                      </form>
                      </div>



                      </div>
                  </div>
                  </div>
              {{-- Add categoty --}}


{{-- Add Subcategory --}}


              <!-- Button trigger modal -->
<button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal">
Add Subcategory
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
  <div class="modal-content">
    <div class="modal-header">
      <h5 class="modal-title" id="exampleModalLabel">Add Subcategory</h5>
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
    <div class="modal-body">


    <form id="subcategory_form" method="POST" action="{{route('sub_cat_create')}}">
                          @csrf
                              <div class="form-group form-float">
                               <input type="text" class="form-control" placeholder="Subcategory Card Number" name="subcategory_card_number" required>
                              </div>

                              <div class="form-group form-float">

                                      <select class="form-control show-tick ms select2"
                                          data-placeholder="Product Category" name="category_id">
                                          <option></option>
                                          @foreach ($categories as $category)
                                              <option value="{{ $category->id }}">{{ $category->category_name }}</option>
                                          @endforeach

                                      </select>
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="submit" id="subcategory_btn" class="btn btn-primary">Submit</button>
                              </div>
      </form>



    </div>

  </div>
</div>
</div>

{{-- Add Subcategory --}}

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Phone') }}</label>

                            <div class="col-md-6">
                                <input id="phone" type="text" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}" required autocomplete="phone" autofocus>

                                @error('phone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">

                                        <select class="form-control show-tick ms select4"
                                             data-placeholder="Product Category" id="main_category_id" name="card_name">
                                            <option>Card Name</option>
                                            @foreach ($categories as $category)
                                            <option value="{{ $category->id }}">{{ $category->category_name }}</option>
                                            @endforeach

                                        </select>




                                    <select class="form-control show-tick ms select4"
                                        data-placeholder="Product Subcategory" id="subcategory_id" name="card_number">
                                        <option>Card Number</option>
                                        @foreach ($sub_categories as $subcategory)
                                <option value="{{ $subcategory->id }}">{{ $subcategory->subcategory_card_number }}</option>
                                           @endforeach
                                    </select>
                                </div>



                        <div class="form-group row">
                            <label for="card_ammount" class="col-md-4 col-form-label text-md-right">{{ __('Card Amount') }}</label>

                            <div class="col-md-6">
                                <input id="card_ammount" type="text" class="form-control @error('card_ammount') is-invalid @enderror" name="card_ammount" value="{{ old('card_ammount') }}" required autocomplete="card_ammount" autofocus>

                                @error('card_ammount')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="account" class="col-md-4 col-form-label text-md-right">{{ __('Account') }}</label>

                            <div class="col-md-6">
                                <input id="account" type="text" class="form-control @error('account') is-invalid @enderror" name="account" value="{{ old('account') }}" required autocomplete="account" autofocus>

                                @error('account')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>



                        <div class="form-group row">
                            <label for="address" class="col-md-4 col-form-label text-md-right">{{ __('Address') }}</label>

                            <div class="col-md-6">
                                <input id="address" type="text" class="form-control @error('address') is-invalid @enderror" name="address" value="{{ old('address') }}" required autocomplete="address" autofocus>

                                @error('account')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

<script src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js">
      </script>
      <script>
    $(document).ready(function(){
        $('#btn-submit').on('click',function(){
            $('#category_form').submit();
        });

        $('#subcategory_btn').on('click',function(){
            $('#subcategory_form').submit();
        });
    });
</script>
<script>
    $(document).ready(function(){
        $('#main_category_id').change(function () {

            var main_category_id = this.value;
            alert(main_category_id);
            $.ajaxSetup({
              headers: {
                  'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $.ajax({
            type:'POST',
            url:'/get/subcategory',
            data: {
              main_category_id: main_category_id
            },
            success: function (data) {
                    $( "#subcategory_id" ).html(data);
                    // console.log(data);
                     // alert(data);
                }
            });

        });
    });
</script>
