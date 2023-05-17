@extends('layouts.app_duplicate')
<!-- Main Content -->

@section('content')



<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Discount Store Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- datatables -->

    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">

        <!-- favicon size 64x64   good -->
    <link rel="icon" type="image/png" href="{{asset('Dashboard/assets_kayes/media/iNeedfavicon.ico')}}" />
    <!-- Bootstrap Font Icon CSS -->
    <link rel="stylesheet"  href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" />
</head>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<style>
   .nav-tabs .nav-item.show .nav-link, .nav-tabs .nav-link.active {
    color: #ffffff;
    background-color: rgb(0, 204, 211);
    border-color: #dee2e6 #dee2e6 #fff;
}
.nav-link {
    display: block;
    padding: 0.5 rem 1 rem;
    color: #000000;
    font-weight: bold;
    text-decoration: none;
    transition: color .15s ease-in-out,background-color .15s ease-in-out,border-color .15s ease-in-out;
}
.nav-tabs .nav-link {
    margin-bottom: -1px;
    background: black;
    border: 1px solid transparent;
    border-top-left-radius: 0.25rem;
    border-top-right-radius: 0.25rem;
    color: white;
}
hr {
  margin-top: 1rem;
  margin-bottom: 1rem;
  border: 0;
  border-top: 1px solid rgba(0, 0, 0, 0.1);
}
</style>
<!-- header style -->
<style>
    .bd-placeholder-img {
      font-size: 1.125rem;
      text-anchor: middle;
      -webkit-user-select: none;
      -moz-user-select: none;
      user-select: none;
    }

    @media (min-width: 768px) {
      .bd-placeholder-img-lg {
        font-size: 3.5rem;
      }
    }
    .nav-text{
    color: black;
    font-weight: 600;
  }

  </style>
<body>
     <!-- header section -->
<header class="p-3   " style="background-color: #ffffff;">
    <div class="container">
      <div class=" d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
        <a href="#" class="col-3 d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
          <img src="{{asset('Dashboard/assets_kayes/media/logo_v3_withoutSlogan.png')}}" id="logo" alt="" style="width: 80%;">
        </a>
        <a href="#" class="nav-link px-2 nav-text"> {{Auth::user()->name}}</a>
        <!-- <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
          <li><a href="#" class="nav-link px-2 nav-text"> User Name: Osman Sikdar</a></li>
        </ul> -->


        <div class="text-end" style=" padding-left: 44%;">
          <div class="dropdown text-end">
            <a href="#" class="d-block link-dark text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
              <img src="https://github.com/mdo.png" alt="mdo" width="32" height="32" class="rounded-circle">
            </a>
            <ul class="dropdown-menu text-small" aria-labelledby="dropdownUser1">
                <li>
                    <a class="dropdown-item" href="#"> Notifications <i class="bi bi-bell"> </i>
                        <span class="badge badge-light" >4</span>
                    </a>
                 </li>
              <li><a class="dropdown-item" href="{{route('customer_profile')}}">Profile</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="#">Sign out</a></li>
            </ul>
            <li><a class="dropdown-item" href="{{ route('logout') }}"
               onclick="event.preventDefault();
                             document.getElementById('logout-form').submit();">
                {{ __('Logout') }}
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
            </li>
          </div>
        </div>
      </div>
    </div>
  </header>
<!-- header section end -->
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


     <div class="form-group form-float">

                <div class="form-group form-float" >
                          <select class="form-control show-tick ms select2"
                              data-placeholder="User Name"   name="name">
                             <option>User mobile number</option>
                             @foreach ($users as $user)
                             <option value="{{ $user->id }}">{{ $user->mobile }}</option>
                             @endforeach

                         </select>
                 </div>
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

     <div class="form-group col-md-4">
       <label for="price">Discount</label>
       <input type="text" name="discount" class="form-control" id="discount"  placeholder="Discount">

     </div>

     <div class="form-group col-md-4">
       <label for="price">Discount Price</label>
       <input type="text" name="discount_price" class="form-control" id="discount_price"  placeholder="Discount price">

     </div>


        <div class="form-group">
            <div class="checkbox">
                <input id="checkbox" type="checkbox" name="form_checked">
                <label for="checkbox">I have read and accept the terms</label>
            </div>
        </div>
        <button class="btn btn-raised btn-primary waves-effect" type="submit">SUBMIT</button>

    </form>

</body>
</section>

<script>
       $(document).on("change keyup blur", "#discount", function() {
           var main = $('#price').val();
           var disc = $('#discount').val();
           var dec = (disc / 100).toFixed(2); //its convert 10 into 0.10
           var mult = main * dec; // gives the value for subtract from main value
           var discont = main - mult;
           $('#discount_price').val(discont);
       });
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
                     //alert(data);
                }
            });

        });
    });
</script>
     <!-- Footer-->
 <!-- <link rel="stylesheet" href="../1.main-landing-page/css/styles.css"> -->
 <style>
     footer{
        background-color: #000 !important;
}
    footer a {
          color: rgba(255, 255, 255, 0.5);
          text-decoration: none;
      }
      footer a:hover, footer a:active, footer a:focus {
          color: rgba(255, 255, 255, 0.75);
          text-decoration: underline;
      }
  </style>
      <!-- Footer-->
      <footer class="bg-black text-center py-5">
        <div class="container px-5">
            <div class="text-white-50 small">
                <div class="mb-2">&copy; Your Website 2021. All Rights Reserved.</div>
                <a href="#!">Privacy</a>
                <span class="mx-1">&middot;</span>
                <a href="#!">Terms</a>
                <span class="mx-1">&middot;</span>
                <a href="#!">FAQ</a>
            </div>
        </div>
    </footer>
</body>
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

    <!-- <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script> -->
    <script>
        $('.mydatatable').DataTable();
    </script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</html>
@endsection
