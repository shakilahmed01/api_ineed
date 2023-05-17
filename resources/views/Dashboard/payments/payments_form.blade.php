@extends('layouts.app_duplicate')
<!-- Main Content -->

@section('content')
<!-- <script type="text/javascript" src="http://code.jquery.com/jquery-1.7.1.min.js"></script> -->
<!-- <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script> -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<body class="theme-blush">
  <section class="content">

  <h1>User Payments Information</h1>

  @if ($message = Session::get('success'))
  <div class="alert alert-success alert-block">
      <button type="button" class="close" data-dismiss="alert">×</button>
          <strong>{{ $message }}</strong>
  </div>
  @endif

  @if (count($errors) > 0)
      <div class="alert alert-danger">
          <strong>Whoops!</strong> There were some problems with your input.
          <ul>
              @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
              @endforeach
          </ul>
      </div>
  @endif

<form  method="POST" action="{{route('add_payments')}}" enctype="multipart/form-data">
     @csrf


     <div class="form-group col-md-4">
       <label for="user_name">User Name</label>
       <input type="name" name="user_name" class="form-control" id="user_name"  placeholder="User Name">

     </div>


     <div class="form-group form-float" >
               <select class="form-control show-tick ms select2"
                   data-placeholder="Product Category" id="main_category_id"  name="card_name">
                  <option>Card Name</option>
                  @foreach ($categories as $category)
                  <option value="{{ $category->id }}">{{ $category->category_name }}</option>
                  @endforeach

              </select>
      </div>


      <div class="form-group form-float">

          <select class="form-control show-tick ms select2" type="input"
              data-placeholder="Product Subcategory" id="subcategory_id" name="card_number">
              <option >Card Number</option>
              @foreach ($sub_categories as $subcategory)
      <option value="{{ $subcategory->id }}">{{ $subcategory->subcategory_card_number }}</option>
                 @endforeach
          </select>
        
      </div>



     <div class="form-group col-md-4">
       <label for="store_name">Store Name</label>
       <input type="name" name="store_name" class="form-control" id="store_name"  placeholder="Store Name">

     </div>

     <div class="form-group col-md-4">
       <label for="store_location">Store Location</label>
       <input type="name" name="store_location" class="form-control" id="store_location"  placeholder="Store Location">

     </div>

     <div class="form-group col-md-4">
       <label for="phone">User Mobile Number</label>
       <input type="name" name="phone" class="form-control" id="phone"  placeholder="Phone Number">

     </div>

     <div class="form-group col-md-4">
       <label for="price">Price</label>
       <input type="text" name="price" class="form-control" id="price"  placeholder="Price">

     </div>


        <div class="form-group">
            <div class="checkbox">
                <input id="checkbox" type="checkbox" name="form_checked">
                <label for="checkbox">I have read and accept the terms</label>
            </div>
        </div>
        <button class="btn btn-raised btn-primary waves-effect" type="submit">SUBMIT</button>

    </form>
<a href="{{route('view_discount_store')}}"><button class="btn btn-primary">view</button></a>
</body>
</section>

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
                     //alert(data);
                }
            });

        });
    });
</script>
@endsection
