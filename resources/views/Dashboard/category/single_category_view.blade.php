@extends('layouts.adminapp')

@section('content')
<body class="theme-blush">
<section class="container">


    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Category Update') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('cat_update') }}">
                        @csrf

                        <div class="form-group row">
                          <input type="hidden" name="id" value="{{$list->id}}">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Category Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="category_name" value="{{ $list->category_name }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Category Discount') }}</label>

                            <div class="col-md-6">
                                <input id="category_discount" type="text" class="form-control @error('category_discount') is-invalid @enderror" name="category_discount" value="{{ $list->category_discount }}" required autocomplete="category_discount">

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
