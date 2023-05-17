<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Company Profile</title>
</head>
  <!-- favicon size 64x64 not good -->
    <link rel="icon" type="image/png" href="{{asset('Dashboard/assets_kayes/media/iNeedfavicon.ico')}}" />
    <!-- Bootstrap Font Icon CSS -->
    <link rel="stylesheet"  href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" />
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  <link href="{{asset('Dashboard/assets_kayes/css/bootstrap.min.css')}}" rel="stylesheet">

<link rel="stylesheet" href="{{asset('Dashboard/assets_kayes/css/icofont.min.css')}}">
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <body>
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

  <!-- profile section -->
  <style>
    body {
       background-image: linear-gradient( 109.6deg, rgba(45,116,213,1) 11.2%, rgb(57 74 98) 91.2% );

}

.form-control:focus {
    box-shadow: none;
    border-color: #BA68C8
}

.profile-button {
    background: rgb(99, 39, 120);
    box-shadow: none;
    border: none
}

.profile-button:hover {
    background: #682773
}

.profile-button:focus {
    background: #682773;
    box-shadow: none
}

.profile-button:active {
    background: #682773;
    box-shadow: none
}

.back:hover {
    color: #682773;
    cursor: pointer
}

.labels {
    font-size: 20px
}

.add-experience:hover {
    background: #BA68C8;
    color: #fff;
    cursor: pointer;
    border: solid 1px #BA68C8
}
.info-type{
  font-weight: 600;
}
  </style>
  <!-- profile section -->
<!-- header section -->
<header class="p-3   " style="background-color: #ffffff;">
    <div class="container">
      <div class=" d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
        <a href="#" class="col-3 d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
          <img src="{{asset('Dashboard/assets_kayes/media/logo_v3_withoutSlogan.png')}}" id="logo" alt="" style="width: 80%;">
        </a>
        <a href="#" class="nav-link px-2 nav-text"> {{ Auth::user()->name }}</a>
        <!-- <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
          <li><a href="#" class="nav-link px-2 nav-text"> User Name: Osman Sikdar</a></li>
        </ul> -->


        <div class="text-end" style=" padding-left: 44%;">
          <div class="dropdown text-end">
            <a href="#" class="d-block link-dark text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
              <img src="https://github.com/mdo.png" alt="mdo" width="32" height="32" class="rounded-circle">
            </a>
            <ul class="dropdown-menu text-small" aria-labelledby="dropdownUser1"><li>
              <a class="dropdown-item" href="#">
             Notifications <i class="bi bi-bell"></i>
             <span class="badge badge-light">4</span>
           </a>
         </li>
              <li><a class="dropdown-item" href="{{route('profile')}}">Profile</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="#">Sign out</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </header>
<!-- header section end -->

<!-- profile section -->
<div class="container rounded bg-white mt-5 mb-5">
  <div class="row">
      <div class="col-md-5 border-right  mt-5 mb-5 mr-2 ml-5" >
        <h4 class="text-left">Contact US</h4>
        <div class="row">
          <div class="col-md-10  ">
              <div class="p-3 py-5">
                  <div class="d-flex justify-content-between align-items-center mb-3">
                      <h4 class="text-right">Company Information</h4>
                  </div>
                  <div class="row mt-2">
                      <div class="col-md-12">
                        <label class="labels">
                          <span class="info-type">Company Name : </span>
                          <span class="info">ineed.com.bd</span>
                        </label>
                      </div>
                      <div class="col-md-12">
                        <label class="labels">
                          <span class="info-type"> Company Phone No : </span>
                          <span class="info">0152000000001</span>
                        </label>
                      </div>

                      <div class="col-md-12">
                        <label class="labels">
                            <span class="info-type">Company Address :</span>
                            <span class="info">পশ্চিম নাখালপাড়া</span>
                        </label>
                      </div>
                  </div>
              </div>
          </div>
      </div>
      </div>
      <div class="col-md-6 border-right">
          <div class="p-3 py-5">
              <div class="d-flex justify-content-between align-items-center mb-3">
                  <h4 class="text-right">Profile Information</h4>
              </div>
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3648.4857216158134!2d90.3950506142994!3d23.87238909002355!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c43c8cbbd0b1%3A0x4f462768a10fb1d5!2sCODETREE!5e0!3m2!1sen!2sbd!4v1636372136506!5m2!1sen!2sbd" width="450" height="300" style="border:2px solid #2D74D5;" allowfullscreen="" loading="lazy"></iframe>

          </div>
      </div>

  </div>
</div>

 <!-- Footer-->
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
 <link rel="stylesheet" href="{{asset('Dashboard/assets_kayes/css/styles.css')}}">
 <footer class="bg-black text-center py-5" style="background-color: #000 !important;">
  <div class="container px-5">
      <div class="text-white-50 small">
          <div class="mb-2">&copy;  Developed by CODETREE DEVELOPERS. All Rights Reserved.</div>
          <a href="#!">Privacy</a>
          <span class="mx-1">&middot;</span>
          <a href="#!">Terms</a>
          <span class="mx-1">&middot;</span>
          <a href="#!">FAQ</a>
      </div>
  </div>
</footer>
</div>
</div>



<!-- header script -->

<script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
crossorigin="anonymous"></script>
  <script src="{{asset('Dashboard/assets_kayes/js/bootstrap.bundle.min.js')}}"></script>
</body>
</html>
