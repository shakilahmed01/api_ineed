@extends('layouts.app_duplicate')
<!-- Main Content -->

@section('content')
<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet" />
<!-- <script type="text/javascript" src="http://code.jquery.com/jquery-1.7.1.min.js"></script> -->
<!-- <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script> -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
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
<!-- Main Content -->
<section class="content">
    <div class="body_scroll">



<!-- BEGIN::HERE WE PUT OUR CONTENT -->

<!-- START -->
<!-- @yield('content') -->

<!-- Basic Validation -->
           <div class="row clearfix">
               <div class="col-lg-8 col-md-6 col-sm-12" style="margin:0 auto;">

                {{-- Add Category --}}
                <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#staticBackdrop">
                    Add Card Name
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="staticBackdrop" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="staticBackdropLabel">Add Card</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>

                        <div class="modal-body">
                        <form id="category_form" method="POST" action="{{ route('cat_create') }}">
                            @csrf
                                <div class="form-group form-float">
                                <input type="text" class="form-control" placeholder="Card Name" name="category_name" required>
                            </div>
                            <div class="form-group form-float">
                            <input type="text" class="form-control" placeholder="Card Discount" name="category_discount" required>
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
  Add Card Number
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Card Number</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">


      <form id="subcategory_form" method="POST" action="{{ route('sub_cat_create') }}">
                            @csrf
                                <div class="form-group form-float">
                                 <input type="text" class="form-control" placeholder=" Card Number" name="subcategory_card_number" required>
                                </div>

                                <div class="form-group form-float">

                                        <select class="form-control show-tick ms select2"
                                            data-placeholder="Card Category" name="category_id">
                                            <option></option>
                                            @foreach ($categories as $category)
                                                <option type="text" value="{{ $category->id }}">{{ $category->category_name }}</option>
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




                   <div class="card">
                       <div class="header">
                           <h2><strong>Add</strong>User<strong>Membership</strong></h2>
                           <ul class="header-dropdown">
                               <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <i class="zmdi zmdi-more"></i> </a>
                                   <ul class="dropdown-menu dropdown-menu-right">
                                       <li><a href="javascript:void(0);">Action</a></li>
                                       <li><a href="javascript:void(0);">Another action</a></li>
                                       <li><a href="javascript:void(0);">Something else</a></li>
                                   </ul>
                               </li>
                               <li class="remove">
                                   <a role="button" class="boxs-close"><i class="zmdi zmdi-close"></i></a>
                               </li>
                           </ul>
                       </div>
                       <div class="body">
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

                       <form  method="POST" action="{{route('post_user_information')}}" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group form-float">

                                       <div class="form-group form-float" >
                                                 <select class="form-control show-tick ms select2"
                                                     data-placeholder="User id goes here" id="userid"   name="user_id">
                                                    <option>User Id</option>
                                                    @foreach ($users as $user)
                                                    <option value="{{ $user->id }}">{{ $user->mobile }}</option>
                                                    @endforeach

                                                </select>
                                        </div>
                                   </div>
                        <div class="form-group form-float">

                                   <div class="form-group form-float" >
                                             <select class="form-control show-tick ms select2"
                                                 data-placeholder="Your Mobile Number goes here please input" id="usermobile"   name="user_mobile">
                                                <option>User Mobile number </option>
                                                @foreach ($users as $user)
                                                <option value="{{ $user->mobile }}">{{ $user->mobile }}</option>
                                                @endforeach

                                            </select>
                                    </div>
                               </div>
                               <div class="form-group form-float">
                                   <input type="text" class="form-control" placeholder="user name" name="user_name" required>
                               </div>
                               <div class="form-group form-float">
                                   <input type="text" class="form-control" placeholder="Email" name="email" required>
                               </div>


                               <div class="form-group form-float" >
                                         <select class="form-control show-tick ms select2"
                                             data-placeholder="Your Card Name Goes here please input" id="main_category_id"  name="card_name">
                                            <option>Card Name</option>
                                            @foreach ($categories as $category)
                                            <option value="{{ $category->category_name }}">{{ $category->category_name }}</option>
                                            @endforeach

                                        </select>
                                </div>

                                <div class="form-group form-float">

                                    <select class="form-control show-tick ms select2" type="input"
                                        data-placeholder="Your Card Number Goes here please input" id="subcategory_id" name="card_number">
                                        <option >Card Number</option>
                                        @foreach ($sub_categories as $subcategory)
                                <option value="{{ $subcategory->subcategory_card_number }}">{{ $subcategory->subcategory_card_number }}</option>
                                           @endforeach
                                    </select>
                                    <!-- <input class="form-control show-tick ms select2" id="subcategory_id" type="text" name="card_number" list="card_number">
                                          <datalist >
                                            @foreach ($sub_categories as $subcategory)
                                            <option value="{{ $subcategory->id }}">{{ $subcategory->subcategory_card_number }}</option>
                                                       @endforeach
                                          </datalist> -->
                                </div>


                               <div class="form-group form-float">
                                   <input name="card_ammount" type="number"  placeholder="Amount" class="form-control no-resize" required>
                               </div>

                               <div class="form-group form-float">

                                   <input name="limit" type="number" class="form-control" placeholder="limit per month">
                               </div>

                               <div class="form-group form-float">

                                          <div class="form-group form-float" >
                                                    <select class="form-control show-tick ms select2"
                                                        data-placeholder="Status" id="usermobile"   name="status">
                                                       <option>Status </option>
                                                       <option value="Processing">Processing</option>

                                                   </select>
                                           </div>
                                </div>


                                <div class="form-group form-float">

                                    <input name="expire_date" type="date" class="form-control" placeholder="Expire Date">
                                </div>
                                <div class="form-group form-float">

                                    <input name="address" type="text" class="form-control" placeholder="Address">
                                </div>

                               <div class="form-group form-float">
                                 <div class="card">
                                    <div class="header">
                                        <h2>Feature Photo</h2>
                                    </div>
                                    <div class="body">
                                        <input type="file" class="dropify" name="photo">
                                    </div>
                                </div>
                               </div>



                               <div class="form-group">
                                   <div class="checkbox">
                                       <input id="checkbox" type="checkbox" name="form_checked">
                                       <label for="checkbox">I have read and accept the terms</label>
                                   </div>
                               </div>
                               <button class="btn btn-raised btn-primary waves-effect" type="submit">SUBMIT</button>

                           </form>

                       </div>
                   </div>
               </div>
           </div>

<!-- END -->

<!-- END::HERE WE PUT OUR CONTENT -->


    </div>
</section>
<script type="text/javascript">
$("#datepicker").datepicker({
        viewMode: 'years',
         format: 'mm-yyyy'
    });
</script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>
<script type="text/javascript">

      $("#main_category_id").select2({
            placeholder: "Select a Card Name",
            allowClear: true
        });

        $("#subcategory_id").select2({
              placeholder: "Select a card number",
              allowClear: true
          });
          $("#usermobile").select2({
                placeholder: "Select a mobile",
                allowClear: true
            });
            $("#userid").select2({
                  placeholder: "Select a mobile",
                  allowClear: true
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
@endsection
