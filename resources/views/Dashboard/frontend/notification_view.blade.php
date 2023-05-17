
<!doctype html>
<html lang="en">
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

    <!-- Custom styles for this template -->
  </head>
  <body>
<main>
  <header class="p-3 mb-3 border-bottom">
    <div class="container">
      <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
        <a href="#" class="col-3 d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
          <img src="{{asset('Dashboard/assets_kayes/media/logo_v3_withoutSlogan.png')}}" id="logo" alt="" style="width: 80%;">
        </a>
        <a href="#" class="nav-link px-2 nav-text" style="text-decoration: none; color: black;"> User Name: {{Auth::user()->name}}</a>


        <div class="dropdown text-end" style="margin: 0% 0% 0% 40%;">
          <a href="#" class="d-block link-dark text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
            <img src="https://github.com/mdo.png" alt="mdo" width="32" height="32" class="rounded-circle">
          </a>
          <ul class="dropdown-menu text-small" aria-labelledby="dropdownUser1">
          <li>
               <a class="dropdown-item" href="{{route('view_offer_list')}}">
              Notifications <i class="bi bi-bell"></i>
              <span style="Color:red;">{{$offer}}</span>
            </a>
          </li>
            <li><a class="dropdown-item" href="{{route('customer_profile')}}">Profile</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="{{ route('logout') }}"
               onclick="event.preventDefault();
                             document.getElementById('logout-form').submit();">
                {{ __('Logout') }}
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </header>
  <div class="container mb-3 mt-3">
    <table class="table table-striped table-bordered table-hover mydatatable" style="width: 100%;" id="">
        <thead>
            <tr>
                <th>Customer Name</th>
                <th>Store Name</th>
                <th>Store Location</th>
                <th>Discount</th>
                <th>Image</th>
            </tr>
        </thead>

        <tbody>
            <a href="#">
              @foreach($offers as $offer)
                <tr data-href="https://www.google.com/">
                   <a href="#">
                     <td>{{Auth::user()->name}}</td>

                    <td>{{$offer->store_name}}</td>
                    <td>{{$offer->store_location}}</td>
                    <td>{{$offer->discount}}</td>
                    <td><img src="{{ asset('uploads/offers') }}/{{ $offer->photo }}" alt=""></td>
                   </a>
                </tr>
                @endforeach
            </a>
        </tbody>
    </table>
</div>

<!-- navbar -->
  <nav class="nav pl-2 ml-3">
    <a class="nav-link active" href="{{route('user_home')}}" target="_blank">Customer Home</a>
    <a class="nav-link" href="{{route('grocery_summary')}}" target="_blank">Grocery Summary</a>
    <a class="nav-link" href="{{route('grocery_store')}}" target="_blank">Grocery Stores</a>
    <a class="nav-link" href="{{route('discount_table')}}" target="_blank">Discount Store Tab Page</a>
    <a class="nav-link" href="{{route('customer_profile')}}" target="_blank">Customer Profile</a>
    <a class="nav-link" href="{{route('company_profile')}}" target="_blank">Company Profile</a>

  </nav>
  <!-- navbar -->

      <!-- Footer-->
      <style>
          footer a {
                color: rgba(255, 255, 255, 0.5);
                text-decoration: none;
            }
            footer a:hover, footer a:active, footer a:focus {
                color: rgba(255, 255, 255, 0.75);
                text-decoration: underline;
            }
      </style>
      <footer class="bg-black text-center py-5" style="background-color: #000 !important; margin: 11% 0% 0% 0%;" >
        <div class="container px-5">
            <div class="text-white-50 small" style="--bs-text-opacity: 1;
                                                      color: rgba(255, 255, 255, 0.5) !important;
                                                      font-size: 0.875em;">
                <div class="mb-2">&copy; Developed by CODETREE DEVELOPERS. All Rights Reserved.</div>
                <a href="#!">Privacy</a>
                <span class="mx-1">&middot;</span>
                <a href="#!">Terms</a>
                <span class="mx-1">&middot;</span>
                <a href="#!">FAQ</a>
            </div>
        </div>
    </footer>


</main>

<script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
  crossorigin="anonymous"></script>
    <script src="{{asset('Dashboard/assets_kayes/js/bootstrap.bundle.min.js')}}"></script>
<!-- Custom script To make row clickable -->
<script>
  // if new row is created
  function addRow(){
                 document.querySelector("tbody").insertAdjacentHTML("beforeend",`
                 <tr data-href="https://www.google.com/">
                         <td>new</td>
                         <td>5%</td>
                         <td> 10000</td>
                 </tr>
                 `)
             }
             $(document).ready(function () {
                 $(document.body).on("click", "tr[data-href]", function() {
                     window.location.href = this.dataset.href;
                 });
             });
</script>

  </body>
</html>
