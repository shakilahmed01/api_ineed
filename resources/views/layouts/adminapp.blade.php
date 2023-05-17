<!doctype html>
<html class="no-js " lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
<meta name="description" content="Responsive Bootstrap 4 and web Application ui kit.">
<title>Admin panel </title>
<link rel="icon" href="favicon.ico" type="{{asset('Dashboard/assets/image/x-icon')}}"> <!-- Favicon-->
@include('Dashboard.include.css')
</head>

<body class="theme-blush">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Page Loader -->
@include('Dashboard.include.preloader')

<!-- Main Search -->
<div id="search">
    <button id="close" type="button" class="close btn btn-primary btn-icon btn-icon-mini btn-round">x</button>
    <form action="#" method="GET">
      <input type="search" value="" name ="product_name" required placeholder="Search..." />
      <button type="submit" class="btn btn-primary">Search</button>
    </form>
</div>

<!-- Left Sidebar -->
@include('Dashboard.include.lts')

<!-- Right Sidebar -->

<main class="py-4">
    @yield('content')
</main>

</body>
@include('Dashboard.include.js')
</html>
