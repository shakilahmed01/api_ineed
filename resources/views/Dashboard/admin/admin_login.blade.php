<!doctype html>
<html class="no-js " lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">


<title>:: I need :: Sign In</title>
<!-- Favicon-->
<link rel="icon" href="favicon.ico" type="image/x-icon">
<!-- Custom Css -->
<link rel="stylesheet" href="{{asset('Dashboard/assets/plugins/bootstrap/css/bootstrap.min.css')}}">
<link rel="stylesheet" href="{{asset('Dashboard/assets/css/style.min.css')}}">
</head>

<body class="theme-blush">

<div class="authentication">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-sm-12">
              @if(Session::has('message'))
              <div class="alert alert-success">
              {{Session::get('message')}}</div>
              @endif
                <form class="card auth_form" method="POST" action="{{ route('newlogin') }}">
                  @csrf
                    <div class="header">
                        <img class="logo" src="{{asset('Dashboard/assets/images/admin logo.png')}}" alt="">
                        <h5>{{ __('Login') }}</h5>
                    </div>
                    <div class="body">
                        <div class="input-group mb-3">
                            <input id="mobile" type="mobile" class="form-control @error('mobile') is-invalid @enderror" name="mobile" value="{{ old('mobile') }}" placeholder="mobile">
                            <div class="input-group-append">
                                <span class="input-group-text"><i class="zmdi zmdi-account-circle"></i></span>
                                @error('mobile')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                        </div>
                        <div class="input-group mb-3">
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Password" required autocomplete="current-password">
                            <div class="input-group-append">
                                <span class="input-group-text"><a href="{{ route('password.request') }}" class="forgot" title="Forgot Password"><i class="zmdi zmdi-lock"></i></a></span>
                            </div>
                        </div>
                        <div class="checkbox">
                            <input id="remember_me" type="checkbox">
                            <label for="remember_me">Remember Me</label>
                        </div>
                        <button type="submit" class="btn btn-primary">
                            {{ __('Login') }}
                        </button>



                    </div>
                </form>
                <div class="copyright text-center">
                    &copy;
                    <script>document.write(new Date().getFullYear())</script>,
                    <span>Designed by <a href="https://codetreebd.com/team" target="_blank">Code tree Developers</a></span>
                </div>
            </div>
            <div class="col-lg-8 col-sm-12">
                <div class="card">
                    <img src="{{asset('Dashboard/assets/images/signin.svg')}}" alt="Sign In"/>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Jquery Core Js -->
<script src="{{asset('Dashboard/assets/bundles/libscripts.bundle.js')}}"></script>
<script src="{{asset('Dashboard/assets/bundles/vendorscripts.bundle.js')}}"></script> <!-- Lib Scripts Plugin Js -->
</body>
</html>
