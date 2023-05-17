@extends('layouts.adminapp')
@section('content')
<body class="theme-blush">
  <section class="content">



    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('SubCategory Update') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('sub_update') }}">
                        @csrf

                        <div class="form-group row">
                          <input type="hidden" name="id" value="{{$list->id}}">
                            <label for="subcategory_card_number" class="col-md-4 col-form-label text-md-right">{{ __('Card Number') }}</label>

                            <div class="col-md-6">
                                <input id="subcategory_card_number" type="text" class="form-control @error('subcategory_card_number') is-invalid @enderror" name="subcategory_card_number" value="{{ $list->subcategory_card_number }}" required autocomplete="subcategory_card_number" autofocus>

                                @error('subcategory_card_number')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Category Id') }}</label>

                            <div class="col-md-6">
                                <input id="category_id" type="text" class="form-control @error('category_discount') is-invalid @enderror" name="category_id" value="{{ $list->category_id }}" required autocomplete="category_id">

                                @error('category_discount')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Update') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
  </body>
</section>

@endsection
