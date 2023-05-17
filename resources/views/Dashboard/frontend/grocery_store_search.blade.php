<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <title>Grocery Stores</title>

        <!-- favicon size 64x64 not good -->
    <link rel="icon" type="image/png" href="{{asset('Dashboard/assets_kayes/media/iNeedfavicon.ico')}}" />
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

    <!-- Custom styles for this template -->
    <link href="pricing.css" rel="stylesheet">
    <!-- Custom CSS for footer -->
    <!-- <link rel="stylesheet" href="../main-landing-page/css/styles.css"> -->

     <!-- Bootstrap Font Icon CSS -->
     <link rel="stylesheet"  href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" />
  </head>
  <body>
  <style>
	#card-body{
	 background-image: url('6.jpg');
	 background-repeat:no-repeat;
   background-size: cover;
	 }
   .bg-black {
    background-color: #000 !important;
    }
    .text-white-50 {
    --bs-text-opacity: 1;
    color: rgba(255, 255, 255, 0.5) !important;
   }
   footer a {
    color: rgba(255, 255, 255, 0.5);
    text-decoration: none;
}
small, .small {
    font-size: 0.875em;
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
  <!-- header section -->
  @include('Dashboard.frontend.include.header')
<!-- header section end -->
<div class="row">
  <div class="container">

  <!-- <div class="col-sm-8 col-md-8 col-lg-8"> -->
      <div class="card">
          <div class="header">
              <h2><strong>List</strong>  Store</h2>
              <ul class="header-dropdown">
                  <!-- <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <i class="zmdi zmdi-more"></i> </a>
                      <ul class="dropdown-menu dropdown-menu-right">
                          <li><a href="javascript:void(0);">Action</a></li>
                          <li><a href="javascript:void(0);">Another action</a></li>
                          <li><a href="javascript:void(0);">Something else</a></li>
                      </ul>
                  </li> -->
                  <li class="remove">
                      <a role="button" class="boxs-close"><i class="zmdi zmdi-close"></i></a>
                  </li>
              </ul>
          </div>
          <div class="table-responsive social_media_table">
              <table class="table table-hover c_table">
                  <thead>
                      <tr>

                        <th>Image</th>

                        <th>Store Name</th>
                        <th>Store location</th>
                        <th>mobile Number</th>


                          <!-- <th>Created At</th> -->
                          <th>Action</th>

                      </tr>
                  </thead>
                  <tbody>
                    @if($p->isNotEmpty())
                    @foreach($p as $k)


                      <tr>

                          <td><img class="img-fluid" src="{{ asset('uploads/grocery_stores') }}/{{ $k->photo }}"   alt="">
                              <!-- <span class="text-muted">Florida, United States</span> -->
                          </td>


                          <td><span class="badge badge-info">{{ $k->store_name }}</span>

                          </td>

                          <td><span class="badge badge-info">{{ $k->store_location }}</span>

                          </td>
                          <td><span class="badge badge-info">{{ $k->phone }}</span>


                          </td>


                        </tr>

                    @endforeach
                    @else
                        <div>
                            <h2>No posts found</h2>
                        </div>
                    @endif



                  </tbody>
              </table>

          </div>
      </div>
  <!-- </div> -->


</div>

<!-- </div> -->
</section>
<!-- END -->

<!-- END::HERE WE PUT OUR CONTENT -->



  </div>

      <!-- Footer-->
      <footer class="bg-black text-center py-5">
        <div class="container px-5">
            <div class="text-white-50 small">
                <div class="mb-2">&copy; Developed by CODETREE DEVELOPERS. All Rights Reserved.</div>
                <a href="#!">Privacy</a>
                <span class="mx-1">&middot;</span>
                <a href="#!">Terms</a>
                <span class="mx-1">&middot;</span>
                <a href="#!">FAQ</a>
            </div>
        </div>
    </footer>

<script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
crossorigin="anonymous"></script>
  <script src="{{asset('Dashboard/assets_kayes/js/bootstrap.bundle.min.js')}}"></script>
  </body>
</html>
