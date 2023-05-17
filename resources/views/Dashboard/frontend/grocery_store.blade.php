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
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <title>Customer Home</title>
    <!-- favicon size 64x64 not good -->
  <link rel="icon" type="image/png" href="{{asset('Dashboard/assets_kayes/media/iNeedfavicon.ico')}}" />

    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/headers/">
     <!-- Bootstrap Font Icon CSS -->
     <link rel="stylesheet"  href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" />

    <!-- Bootstrap core CSS -->
  <link href="{{asset('Dashboard/assets_kayes/css/bootstrap.min.css')}}" rel="stylesheet">

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
  tr[data-href] {
      cursor: pointer;
  }
    </style>
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
    <!-- Custom styles for this template -->
  </head>
<!-- header section end -->
<div class="container py-3" id="cardContainer">
  <div class="row mb-2">
    <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3" method="get" action="{{route('grocery_search')}}">
      <input type="search" class="form-control" value="" name="store_name" placeholder="Search..." aria-label="Search">
    </form>
  </div>
    <div class="row">
      @foreach($grocery as $store)
      <div class="col-12 col-sm-8 col-md-6 col-lg-4 col-height" >

        <div class="card">
          <style>
            .card-img{
              width:"fit-content";
              height: 40%;
            }
            .col-height{
              height:30rem;
            }
            .card{
              height: 35rem;
              transition: transform .2s;
            }
            .card:hover{
              -ms-transform: scale(1.1); /* IE 9 */
              -webkit-transform: scale(1.1); /* Safari 3-8 */
              transform: scale(1.1);
              cursor: pointer;
            }

            .card-text, .card-title, .card-subtitle {
              color: #000;
            }
            .custom-font{
              font-size:1rem;
            }
          </style>

           <img class="card-img" src="{{ asset('uploads/grocery_stores') }}/{{ $store->photo }}" alt="Bologna">
          <div class="card-img-overlay text-white d-flex flex-column justify-content-center">
            <h4 class="card-title custom-font">
              Store Name: {{$store->store_name}}
            </h4>
            <h6 class="card-subtitle mb-2">
              Address: {{$store->store_location}}
            </h6>
            <p class="card-text">
              Mobile: {{$store->phone}}
             </p>
            <!-- <div class="link d-flex">
              <a href="#" class="card-link text-warning">Read More</a>
              <a href="#" class="card-link text-warning">Book a Trip</a>
            </div> -->
          </div>
        </div>
      </div>
      @endforeach
      <style>
        @import url('https://fonts.googleapis.com/css2?family=Galada&display=swap');
        @import url('https://fonts.maateen.me/solaiman-lipi/font.css');
        </style>

        <div class="col-12 col-sm-8 col-md-6 col-lg-4">
          <div class="card">
             <img class="card-img" src="{{asset('Dashboard/assets_kayes/media/2.jpg')}}" alt="Bologna" >
            <div class="card-img-overlay text-white d-flex flex-column justify-content-center" ;>
              <h4 class="card-title custom-font">
                সবুজ জেনারেল স্টোর
              </h4>
              <h6 class="card-subtitle mb-2">
                ঠিকানা : পল্লবী,  মিরপুর
              </h6>
              <p class="card-text">
                মোবাইল : 01234567890
               </p>
              <!-- <div class="link d-flex">
                <a href="#" class="card-link text-warning">Read More</a>
                <a href="#" class="card-link text-warning">Book a Trip</a>
              </div> -->
            </div>
          </div>
        </div>
        <div class="col-12 col-sm-8 col-md-6 col-lg-4">
          <div class="card">
             <img class="card-img" src="{{asset('Dashboard/assets_kayes/media/3.jpg')}}" alt="Bologna" >
             <div class="card-img-overlay text-white d-flex flex-column justify-content-center"  style="font-size:20px" >
              <h4 class="card-title  custom-font">
                ফ্যাশন ডট কম
              </h4>
              <h6 class="card-subtitle mb-2">
                ঠিকানা : ভুলতা, নারায়ণগঞ্জ
              </h6>
              <p class="card-text">
                মোবাইল : 01234567890
               </p>
              <!-- <div class="link d-flex">
                <a href="#" class="card-link text-warning">Read More</a>
                <a href="#" class="card-link text-warning">Book a Trip</a>
              </div> -->
            </div>
          </div>
        </div>
      </div>
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
