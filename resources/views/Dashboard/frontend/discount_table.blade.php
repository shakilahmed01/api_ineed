<!DOCTYPE html>
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
          </div>
        </div>
      </div>
    </div>
  </header>
<!-- header section end -->
    <div class="container">
        <h2 class="py-3 text-center"></h2>
        <div class="row py-3 justify-content-center">
            <div class="col-md-12">
                <style>
                    .nav-tabs li  {
                        width: 50%;
                    }
                </style>
                <ul class="nav nav-tabs" id="myTab">
                    <li class="nav-item">
                        <a href="#discountStore" class="nav-link active text-center" data-toggle="tab">
                            Discount Store
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#discountStoreSummary" class="nav-link text-center" data-toggle="tab">
                            Discount Store Summary
                        </a>
                    </li>
                </ul>
                <div class="tab-content py-3" id="myTabContent">
                    <div class="tab-pane fade show active" id="discountStore">
                        <div>
                            <style>
                                #price-badge{
                                    position: relative;
                                    left: 50%;
                                    padding: 1%  1% 1% 1%;
                                }
                            </style>

                            @foreach($store as $dis)
                              <span class="badge bg-danger float-right" id="price-badge"> -10% </span>
                            <h2>
                                {{$dis->store_name}}
                            </h2>
                            <h4>
                                Address: {{$dis->store_location}}
                            </h4>
                            <p>
                                Mobile: {{$dis->phone}}
                            </p>
                            <hr>
                            @endforeach
                        </div>

                    </div>
                    <div class="tab-pane fade " id="discountStoreSummary">
                        <div class="w-25 p-3" style="background-color: #eee;">
                            <select class="form-select" aria-label="Default select example">
                                <option selected>Filter By</option>
                                <option value="week">Last Week</option>
                                <option value="month">Last Month</option>
                                <option value="year">Last Year</option>
                              </select>
                        </div>

                        <!-- Discount Store Datatables  -->
                        <style>
                            /* table, th, tr, td {
                                border: 1px solid black;
                                border-collapse: collapse;
                                } */
                        </style>
                        <div class="container mb-3 mt-1">
                            <table class="table table-striped table-bordered mydatatable" style="width: 100%; ">
                                <thead>

                                    <tr>
                                        <th>Date</th>
                                        <th>Card Number</th>
                                        <th>Shop</th>
                                        <th>Price</th>
                                        <th>Discount</th>
                                        <th>Discount Price</th>
                                    </tr>

                                </thead>
                                <tbody>
                                    @foreach($payments as $payment)
                                    <tr>
                                        <td>{{$payment->created_at->diffForHumans()}}</td>
                                        <td>{{$payment->relationBetweenSubCategory->subcategory_card_number}}</td>
                                        <td>{{$payment->store_name}}</td>
                                        <td>{{$payment->price}}</td>
                                        <td>{{$payment->relationBetweenCategory->category_discount}}</td>
                                        <td>{{$payment->discount_price}}</td>
                                    </tr>
                                      @endforeach


                                </tbody>
                               <tfoot>
                                <tr>
                                    <!-- <th id="total" colspan="5" class="text-end">Total Purchase Amount:</th> -->
                                    <td id="total" colspan="5" class="text-start"> </td>
                                    <td id="total"   class="text-start"></td>
                                  </tr>
                               </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
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
