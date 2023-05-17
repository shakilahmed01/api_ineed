<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer Profile</title>
</head>
  <!-- favicon size 64x64 not good -->
    <link rel="icon" type="image/png" href="{{asset('Dashboard/assets_kayes/media/iNeedfavicon.ico')}}" />
    <!-- Bootstrap Font Icon CSS -->
<link rel="stylesheet" href="{{asset('Dashboard/assets_kayes/css/icofont.min.css')}}">
    <link rel="stylesheet"  href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" />
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  <link href="{{asset('Dashboard/assets_kayes/css/bootstrap.min.css')}}" rel="stylesheet">

  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
  integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
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
    font-size: 25px
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
@include('Dashboard.frontend.include.header')
<!-- header section end -->

<!-- profile section -->
<div class="container rounded bg-white mt-5 mb-5">
  <div class="row">
      <div class="col-md-6 border-right">
          <div class="d-flex flex-column align-items-center text-center p-3 py-5">
            <img class=" mt-5" width="150px"
            src="{{asset('Dashboard/assets_kayes/media/profile-dami-image.png')}}">
            <span class="font-weight-bold">{{ Auth::user()->name }}</span><span class="text-black-50">
              mymail@gmail.com
            </span>
            <span>

            </span>
          </div>
      </div>
      <div class="col-md-6 border-right">
          <div class="p-3 py-5">
              <div class="d-flex justify-content-between align-items-center mb-3">
                  <h4 class="text-right">Profile Information</h4>
              </div>
              <div class="row mt-2">
                  <div class="col-md-12">
                    <label class="labels">
                      <i class="icofont-hotel-boy"></i>
                      <span class="info-type">Name : </span>
                      <span class="info">{{ Auth::user()->name }}</span>
                    </label>
                  </div>
                  <div class="col-md-12">
                    <label class="labels">
                      <i class="icofont-user-male"></i>
                      <span class="info-type">Father's Name :</span>
                      <span class="info">Anthony Mickel</span>
                    </label>
                  </div>
                  <div class="col-md-12">
                    <label class="labels">
                      <i class="icofont-user-female"></i>

                      <span class="info-type">Mothers's Name :</span>
                      <span class="info">Cathrine Mickel</span>

                    </label>
                  </div>
                  <div class="col-md-12">
                    <label class="labels">
                      <i class="icofont-phone"></i>
                      <span class="info-type">Phone Number :</span>
                      <span class="info">0152000000001</span>
                    </label>
                  </div>
                  <div class="col-md-12">
                    <label class="labels">
                      <i class="icofont-ui-calendar"></i>
                        <span class="info-type">Date of Birth :</span>
                        <span class="info">01/01/2002</span>
                    </label>
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
             <div class="mb-2">&copy; Developed by CODETREE DEVELOPERS. All Rights Reserved.</div>
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

<script src="{{asset('Dashboard/assets_kayes/js/bootstrap.bundle.min.js')}}"></script>
</body>
</html>
