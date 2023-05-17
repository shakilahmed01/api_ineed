
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>iNeed.Com.Bd</title>
    <link rel="icon" type="image/x-icon" href="{{asset('Dashboard/assets_kayes/media/favicon.ico')}}" />
    <!-- Bootstrap icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <!-- Google fonts-->
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link href="https://fonts.googleapis.com/css2?family=Newsreader:ital,wght@0,600;1,600&amp;display=swap"
        rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Mulish:ital,wght@0,300;0,500;0,600;0,700;1,300;1,500;1,600;1,700&amp;display=swap"
        rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,400;1,400&amp;display=swap"
        rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="{{asset('Dashboard/assets_kayes/css/styles.css')}}" rel="stylesheet" />
    <!-- favicon size 64x64 not good -->
    <link rel="icon" type="image/png" href="{{asset('Dashboard/assets_kayes/media/iNeedfavicon.ico')}}" />

    <!-- 3rd module -->
            <link href="{{asset('Dashboard/assets_kayes/css/bootstrap.min.css')}}" rel="stylesheet">
            <link href="{{asset('Dashboard/assets_kayes/css/bootstrap-icons.css')}}" rel="stylesheet">
            <link href="{{asset('Dashboard/assets_kayes/css/style3rdModule.css')}}" rel="stylesheet">
    <!-- Bootstrap Icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.1/font/bootstrap-icons.css">
</head>
<style>
  /* Become a merchant button style start */
  .shadow-sm{
    box-shadow: 0 0px 24px -1px grey !important;
    height: 80px;
  }
  .merchant-btn-hover {
                  width: 26%;
                  font-size: 16px;
                  font-weight: 400;
                  color: #fff;
                  cursor: pointer;
                  margin: 20px;
                  height: 48px;
                  text-align:center;
                  border: none;
                  background-size: 300% 100%;
                  border-radius: 50px;
                  moz-transition: all .4s ease-in-out;
                  -o-transition: all .4s ease-in-out;
                  -webkit-transition: all .4s ease-in-out;
                  transition: all .4s ease-in-out;
              }
              a.merchant-btn-hover{
                  text-decoration: none;
                  color:#ffffff;
              }
              a.merchant-btn-hover:hover{
                  color:#ffffff;
              }
              .merchant-btn-hover:hover {
                  background-position: 100% 0;
                  moz-transition: all .4s ease-in-out;
                  -o-transition: all .4s ease-in-out;
                  -webkit-transition: all .4s ease-in-out;
                  transition: all .4s ease-in-out;
              }
              .merchant-btn-hover:focus {
                  outline: none;
              }
              .merchant-btn-hover.color-3 {
                  background-image: linear-gradient(to right, #667eea, #4b5fa2, #6B8DD6, #3742d7);
                  box-shadow: 0 4px 15px 0 rgba(116, 79, 168, 0.75);
              }
  /* Become a merchant button style end */
    .custom-gradient {
        background-image: linear-gradient(109.6deg, rgba(45, 116, 213, 1) 11.2%, rgba(121, 137, 212, 1) 91.2%);
    }

    .custom-button-color {
        color: #fff;
        background-color: #0089ce;
        border-color: #0088ce;
    }

    .custom-button-color-v1 {
        /* background-color: #0089ce; */
        /* background: linear-gradient(0deg, rgba(48,58,161,1) 28%, rgba(13,114,193,1) 87%); */
        /* background: transparent; */
        color:#fff;
        width: 212px;
        border: 3px solid #ffffff;
        border-radius: 999px;
        /* box-shadow: 0 5px 10px #f9c6bd; */
        font-size: 24px;
        margin: 0 auto 30 px;
        min-height: 50 px;
        position: relative;
        text-decoration: none;
        z-index: 999;
        transition: all .5s ease;
    }
    .custom-button-color-v1:hover{
        background: linear-gradient(0deg, rgba(48,58,161,1) 28%, rgba(13,114,193,1) 87%);
        color:#fff;
        font-size: 26px;
        transform: scale(1.1);
    }
    .btn-width{
        max-width: 280px;
    }
    .dnld{
        position: relative;
        left: 30%;
        margin-bottom: 30%;
    }
    .dnld h3{
        margin: 0% 0 0 17%;
        color:#fff;
    }
    .dnld-qr{
        width:50%;
        height:50%;
        margin: 5% 0 0 6%;
        border:30px solid white;
        border-radius: 18px;
        box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;

    }
    .btn-width{
        width: 280px;
    }
    .three-cards{
        transition: all .5s ease;
    }
    .three-cards:hover{
        transform: scale(1.1);
    }
    #values h3{
        background: linear-gradient(0deg, rgba(48,58,161,1) 28%, rgba(13,114,193,1) 87%);
        font-size: 30px;
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
    }
    #values p.feature-text{
        color:#000000;
        font-size:15px;
        font-weight: bold;
    }
    .custom-h2{
                font-size: 45px;
              }
                .custom-gold-card{
                    width:70%;
                    /* transform:skewY(170deg);  */
                    position: relative;
                    left:15%;
                    filter: drop-shadow(5px 10px 20px #222);
                    animation-duration: 2s;
                    animation-iteration-count: infinite;
                    transform-origin: bottom;
                    animation-name: bounce-1;
                    animation-timing-function: linear;
                    align-self: flex-end;
                    margin: 0 auto 0 auto;

                }
                @keyframes bounce-1{
                    0%   { transform: translateY(0); }
                    50%  { transform: translateY(-10px); }
                    100% { transform: translateY(0); }
                }
                #day-protected{
                  font-family: roboto;
                  font-weight: bold;
                }


</style>

<body id="page-top" >
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top shadow-sm" id="mainNav" >
        <div class="container px-5">
            <a class="navbar-brand fw-bold" href="#page-top">
                <!-- <img src="assets/iNeedComBd_logo.png" class="img-fluid" alt="Responsive image" style="max-width: 20%"> -->
                <img src="{{asset('Dashboard/assets_kayes/media/logo_v3_withoutSlogan.png')}}" class="img-fluid" alt="Responsive image"
                    style="max-width: 20%">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive"
                aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                Menu
                <i class="bi-list"></i>
            </button>
            <style>

      </style>
              <a href="#becomeMerchant" class="merchant-btn-hover color-3" style="">
                  Become a Merchant
              </a>
            <!-- <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ms-auto me-4 my-3 my-lg-0">
                    <li class="nav-item"><a class="nav-link me-lg-3" href="#features">Features</a></li>

                    <li class="nav-item btn-width">
                        <a class="nav-link me-lg-3"
                            href="https://play.google.com/store/apps/details?id=com.adobe.reader" target="_blank">
                            <button type="button" class="btn custom-button-color-v1">Download</button>
                        </a>
                    </li>
                </ul>
                <button class="btn custom-button-color rounded-pill px-3 mb-2 mb-lg-0" data-bs-toggle="modal"           data-bs-target="#feedbackModal">
                        <span class="d-flex align-items-center">
					    	Login
                        </span>
                    </button>
            </div> -->
        </div>
    </nav>
    <!-- Mashead header-->
    <div class="">
        <header class="masthead"
        style="background: linear-gradient( 0deg, rgb(125 135 241) 28%, rgb(24 123 201) 87%);">

            <div class="container px-5" >
                <div class="row gx-5 align-items-center" >
                    <div class="col-lg-6" >
                        <!-- Mashead text and app badges-->
                        <div class="mb-5 mb-lg-0 text-center text-lg-start">
                            <img src="{{asset('Dashboard/assets_kayes/media/credit_cards.png')}}" class="img-fluid three-cards" alt="Responsive image"
                        style="max-width: 90%">
                            <!-- <h1 class="display-1 lh-1 mb-3">Your Daily needs one stop destination</h1>
                            <p class="lead fw-normal text-muted mb-5">Launch your mobile app </p> -->
                            <!-- <div class="d-flex flex-column flex-lg-row align-items-center"> -->
                            <!-- <a class="me-lg-3 mb-4 mb-lg-0" href="#!"><img class="app-badge" src="assets/img/google-play-badge.svg" alt="..." /></a>  -->
                            <!-- </div> -->
                        </div>
                    </div>
                    <div class="col-lg-6">
                            <div class="dnld">
                                <h3>Get our app</h3>
                                <a class="nav-link  "
                                href="https://play.google.com/store/apps/details?id=com.adobe.reader" target="_blank">
                                <!-- <button type="button" class="btn custom-button-color-v1 btn-width ">Download</button> -->
                                <style>

                                  #button--mimas {
                                    pointer-events: auto;
                                    cursor: pointer;
                                    /* background: #e7e7e7; */
                                    background: #f7ffff;
                                    /* background: linear-gradient(
0deg, rgb(125 135 241) 28%, rgb(24 123 201) 87%); */
                                    border: none;
                                    padding: 1.5rem 3rem;
                                    margin: 0;
                                    font-family: inherit;
                                    font-size: inherit;
                                    position: relative;
                                    display: inline-block;
                                    width: 53%;
                                    margin-left: 3%;
                                    text-transform: uppercase;
                                    letter-spacing: 0.05rem;
                                    font-weight: 700;
                                    font-size: 18px;
                                    border-radius: 50px;
                                    overflow: hidden;
                                    color: #fff;
                                  }
                                  #button--mimas::before,
                                  #button--mimas::after {
                                    position: absolute;
                                    top: 0;
                                    left: 0;
                                    width: 100%;
                                    height: 100%;
                                  }
                                  #button--mimas span {
                                    position: relative;
                                    mix-blend-mode: difference;
                                  }

                                  #button--mimas::before {
                                    content: '';
                                    background: #000;
                                    width: 120%;
                                    left: -10%;
                                    transform: skew(30deg);
                                    transition: transform 0.4s cubic-bezier(0.3, 1, 0.8, 1);
                                  }
                                  #button--mimas:hover::before {
                                    transform: translate3d(100%,0,0);
                                    color:blue;
                                  }
                                  </style>
                                <button class=" " id="button--mimas">
                                  <span>
                                    Download
                                  </span>
                                </button>

                           <!-- <button class="custom-btn-dnld btn-10">Download</button>   -->
                            </a>
                            <img class="dnld-qr" src="{{asset('Dashboard/assets_kayes/media/ineed-qr.png')}}" alt="..."/>
                            </div>
                    </div>
                </div>
            </div>
        </header>
          <!-- ======= Values Section ======= -->
        <section id="values" class="values">
          <div class="container" data-aos="fade-up">
            <header class="section-header">
              <p>Meet Our Cool Features</p>
            </header>

            <div class="row">

              <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
                <div class="box">
                  <img src="{{asset('Dashboard/assets_kayes/media/1.png')}}" class="img-fluid" alt="">
                  <h3>Create Your Account</h3>
                  <p class="feature-text">Eum ad dolor et. Autem aut fugiat debitis voluptatem consequuntur sit. Et veritatis id.</p>
                </div>
              </div>

              <div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="400">
                <div class="box">
                  <img src="{{asset('Dashboard/assets_kayes/media/2.png')}}" class="img-fluid" alt="">
                  <h3>Get Verfied</h3>
                  <p class="feature-text">Repudiandae amet nihil natus in distinctio suscipit id. Doloremque ducimus ea sit non.</p>
                </div>
              </div>

              <div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="600">
                <div class="box">
                  <img src="{{asset('Dashboard/assets_kayes/media/3.png')}}" class="img-fluid" alt="">
                  <h3>Build Your Credit Card</h3>
                  <p class="feature-text">Quam rem vitae est autem molestias explicabo debitis sint. Vero aliquid quidem commodi.</p>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- End Values Section -->
          <!-- ======= About Section ======= -->
    <section id="about" class="about">

        <div class="container" data-aos="fade-up">
          <div class="row gx-0">

            <div class="col-lg-6 d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="200">
              <div class="content">
                <h2 class="text-center custom-h2">Your Day is protected</h2>
                <p class="text-center" id="day-protected">
                  Quisquam vel ut sint cum eos hic dolores aperiam. Sed deserunt et. Inventore et et dolor consequatur itaque ut voluptate sed et. Magnam nam ipsum tenetur suscipit voluptatum nam et est corrupti.
                </p>
                <!-- <div class="text-center text-lg-start">
                  <a href="#" class="btn-read-more d-inline-flex align-items-center justify-content-center align-self-center">
                    <span>Read More</span>
                    <i class="bi bi-arrow-right"></i>
                  </a>
                </div> -->
              </div>
            </div>
            <style>

            </style>
            <div class="col-lg-6 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="200">
              <img src="{{asset('Dashboard/assets_kayes/media/Gold-Front.png')}}" class="img-fluid custom-gold-card bounce-1" alt="">
              <!-- <img src="media/newcard.png" class="img-fluid custom-gold-card bounce-1" alt=""> -->
            </div>

          </div>
        </div>

      </section>
      <!-- End About Section -->
      <!-- Start Core Benefit Section -->
      <style>
        #card-benefit-ul{
          padding: 5px;
        }
        .content ul{
          list-style-type:none;
          margin: 3% 0% 0% 0%;
          padding: 0% 0% 0% 0%;
        }

        .content li{
          margin: 0% 0% 60% 0%;
          padding: 0% 0% 0% 0%;
          font-family: 'Poppins', sans-serif;
          font-size: 18px;
          color:	#126BBD;
          transition-timing-function: ease-in-out;
          transition:  .5s;
        }
        .content li:hover{
          color:#000000;
          font-size: 20px;
          cursor: pointer;
        }

        .content i{
          padding: 0% 5% 0% 0%;
          font-size: 20px;
        }

        #credit-cards-2{
          width: 100%;
          margin: 0% 0% 0% 0%;
          padding: 0% 0% 0% 0%;
        }
        #card-benefit-ul-right{
          margin: 0% 0% 0% 0%;
          padding: 0% 0% 0% 30%;
        }
      </style>
      <section id="about" class="about" id="core-benefit">
        <div class="container" data-aos="fade-up">
          <div class="row gx-0  ">
              <h1 class="text-center" style="color:	#264AAA;"> Core Benefit of our card </h1>
            </div>
          <div class="row gx-0">
            <div class="col-lg-3 d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="200">
              <div class="content"  id="card-benefit-ul card-benefit-ul-left">
                 <ul>
                   <li class="card-benefit">
                    <i class="bi bi-check-circle"></i>Potential Saving
                  </li>
                   <li class="card-benefit">
                    <i class="bi bi-check-circle"></i>Protection
                  </li>
                   <li class="card-benefit">
                    <i class="bi bi-check-circle"></i>Organization
                  </li>
                 </ul>
              </div>
            </div>
            <div class="col-lg-6 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="200">

              <img src="{{asset('Dashboard/assets_kayes/media/credit_cards_2.png')}}" class="bounce-1" alt="" id="credit-cards-2">
              <!-- <img src="media/newcard.png" class="img-fluid custom-gold-card bounce-1" alt=""> -->
            </div>
            <div class="col-lg-3 d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="200">
              <div class="content  " id="card-benefit-ul-right">
                 <ul>
                   <li class="card-benefit">
                    <i class="bi bi-check-circle"></i>
                     Top Security
                    </li>
                   <li class="card-benefit">
                    <i class="bi bi-check-circle"></i>
                    Credit History
                  </li>
                   <li class="card-benefit">
                    <i class="bi bi-check-circle"></i>
                    Emergency
                  </li>
                 </ul>
              </div>
            </div>

          </div>
        </div>

      </section>
      <!-- End Core Benefit Section -->
 <!-- ======= Contact Section ======= -->
 <section id="becomeMerchant" class="contact">
  <div class="container" data-aos="fade-up">

    <header class="section-header">
      <p>Become a merchant</p>
    </header>
    <div class="row gy-4">

      <div class="col-lg-6">

        <div class="row gy-4">
          <div class="col-md-6">
            <div class="info-box">
              <i class="bi bi-geo-alt"></i>
              <h3>Address</h3>
              <p>A108 Adam Street,<br>New York, NY 535022</p>
            </div>
          </div>
          <div class="col-md-6">
            <div class="info-box">
              <i class="bi bi-telephone"></i>
              <h3>Call Us</h3>
              <p>+1 5589 55488 55<br>+1 6678 254445 41</p>
            </div>
          </div>
          <div class="col-md-6">
            <div class="info-box">
              <i class="bi bi-envelope"></i>
              <h3>Email Us</h3>
              <p>info@example.com<br>contact@example.com</p>
            </div>
          </div>
          <div class="col-md-6">
            <div class="info-box">
              <i class="bi bi-clock"></i>
              <h3>Open Hours</h3>
              <p>Monday - Friday<br>9:00AM - 05:00PM</p>
            </div>
          </div>
        </div>

      </div>

      <div class="col-lg-6">
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
        <form action="{{route('become_merchant')}}" method="post" class="php-email-form">
          @csrf
          <div class="row gy-4">

            <div class="col-md-6">
              <input type="text" name="name" class="form-control" placeholder="Your Name" required>
            </div>

            <div class="col-md-6 ">
              <input type="email" class="form-control" name="email" placeholder="Your Email" required>
            </div>

            <div class="col-md-12">
              <input type="text" class="form-control" name="subject" placeholder="Subject" required>
            </div>

            <div class="col-md-12">
              <textarea class="form-control" name="message" rows="6" placeholder="Message" required></textarea>
            </div>

            <div class="col-md-12 text-center">
              <div class="loading">Loading</div>
              <div class="error-message"></div>
              <div class="sent-message">Your message has been sent. Thank you!</div>

              <button type="submit">Send Message</button>
            </div>

          </div>
        </form>
      </div>
    </div>
  </div>
</section><!-- End Contact Section -->
    </div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
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
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="{{asset('Dashboard/js/scripts.js')}}"></script>
    <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>

  <!-- Template Main JS File -->
  <script src="{{asset('Dashboard/assets_kayes/js/main.js')}}"></script>
</body>

</html>
