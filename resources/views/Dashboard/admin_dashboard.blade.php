@extends('layouts.adminapp')
@section('content')
<body class="theme-blush">

<section class="content">
    <div class="body_scroll">
        <div class="block-header">
            <div class="row">
                <div class="col-lg-7 col-md-6 col-sm-12">
                    <h2>Admin Dashboard</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{route('admin_index')}}"><i class="zmdi zmdi-home"></i> I need</a></li>
                        <li class="breadcrumb-item">I NEED Admin Dashboard</li>
                        <li class="breadcrumb-item active">Dashboard</li>
                    </ul>
                    <button class="btn btn-primary btn-icon mobile_menu" type="button"><i class="zmdi zmdi-sort-amount-desc"></i></button>
                </div>

            </div>
        </div>
        <div class="container-fluid">
    <div class="row clearfix">
        <div class="col-lg-3 col-md-6" >
            <div class="card">
                <div class="body xl-blue">
                    <h4 class="mt-0 mb-0">{{$grocery_store}}</h4>
                    <p class="mb-0">Total Grocery Store</p>

                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6">
            <div class="card">
                <div class="body xl-blue">
                    <h4 class="mt-0 mb-0"> {{ $users}} </h4>
                    <p class="mb-0 ">Total member</p>

                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6">
            <div class="card">
                <div class="body xl-blue">
                    <h4 class="mt-0 mb-0">{{$discount}}</h4>
                    <p class="mb-0 ">Total Discounts</p>

                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6">
            <div class="card">
                <div class="body xl-blue">
                    <h4 class="mt-0 mb-0">15</h4>
                    <p class="mb-0">Total deposit</p>

                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6">
            <div class="card">
                <div class="body xl-blue">
                    <h4 class="mt-0 mb-0">{{$discount_store}}</h4>
                    <p class="mb-0">Total Discount Store</p>

                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6">
            <div class="card">
                <div class="body xl-blue">
                    <h4 class="mt-0 mb-0">15</h4>
                    <p class="mb-0">Total Due</p>

                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6">
            <div class="card">
                <div class="body xl-blue">
                    <h4 class="mt-0 mb-0">15</h4>
                    <p class="mb-0">Total Marchant Payments</p>

                </div>
            </div>
        </div>
    </div>


              <div class="row clearfix">
                <div class="col-lg-8 col-md-12">
                    <div class="card product-report">
                        <div class="header">
                            <h2><strong>Annual</strong> Report</h2>
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
                            <div class="row clearfix">
                                <div class="col-lg-4 col-md-4 col-sm-4">
                                    <div class="icon xl-amber m-b-15"><i class="zmdi zmdi-chart-donut"></i></div>
                                    <div class="col-in">
                                        <small class="text-muted mt-0">Sales Report</small>
                                        <h4 class="mt-0">$4,516</h4>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4">
                                    <div class="icon xl-blue m-b-15"><i class="zmdi zmdi-chart"></i></div>
                                    <div class="col-in">
                                        <small class="text-muted mt-0">Annual Revenue</small>
                                        <h4 class="mt-0">$6,481</h4>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4">
                                    <div class="icon xl-purple m-b-15"><i class="zmdi zmdi-card"></i></div>
                                    <div class="col-in">
                                        <small class="text-muted mt-0">Total Profit</small>
                                        <h4 class="mt-0">$3,915</h4>
                                    </div>
                                </div>
                            </div>
                            <div id="area_chart"></div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-5 col-md-12">
                    <div class="card mcard_1">
                        <div class="img">
                            <img src="{{asset('Dashboard/assets/images/image-gallery/2.jpg')}}" class="img-fluid" alt="">
                        </div>
                        <div class="body">
                            <div class="user">
                                <img src="{{asset('Dashboard/assets/images/sm/avatar1.jpg')}}" class="rounded-circle img-raised" alt="profile-image">
                                <h5 class="mt-3 mb-1">Partner Marchent Store</h5>
                                <!-- <span>Designer, Developer, Traveler</span> -->
                            </div>
                            <button class="btn btn-primary">Total Sales</button>
                            <div class="d-flex bd-highlight text-center mt-4">
                                <div class="flex-fill bd-highlight">
                                    <h5 class="mb-0">128</h5>
                                    <small>Total Discounts</small>
                                </div>
                                <div class="flex-fill bd-highlight">
                                    <h5 class="mb-0">1,528</h5>
                                    <small>Total Profit</small>
                                </div>
                                <div class="flex-fill bd-highlight">
                                    <h5 class="mb-0">321</h5>
                                    <small>Following</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            <div class="row clearfix">
                <div class="col-sm-12 col-md-12 col-lg-12">
                    <div class="card">
                        <div class="header">
                            <h2><strong>Recent</strong> Orders</h2>
                            <ul class="header-dropdown">
                                <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <i class="zmdi zmdi-more"></i> </a>
                                    <ul class="dropdown-menu dropdown-menu-right slideUp">
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
                        <div class="table-responsive">
                            <table class="table table-hover c_table">
                                <thead>
                                    <tr>
                                        <th style="width:60px;">#</th>
                                        <th>Name</th>
                                        <th>Item</th>
                                        <th>Address</th>
                                        <th>Quantity</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><img src="http://via.placeholder.com/60x40" alt="Product img"></td>
                                        <td>Hossein</td>
                                        <td>IPONE-7</td>
                                        <td>Porterfield 508 Virginia Street Chicago, IL 60653</td>
                                        <td>3</td>
                                        <td><span class="badge badge-success">DONE</span></td>
                                    </tr>
                                    <tr>
                                        <td><img src="http://via.placeholder.com/60x40" alt="Product img"></td>
                                        <td>Camara</td>
                                        <td>NOKIA-8</td>
                                        <td>2595 Pearlman Avenue Sudbury, MA 01776 </td>
                                        <td>3</td>
                                        <td><span class="badge badge-success">DONE</span></td>
                                    </tr>
                                    <tr>
                                        <td><img src="http://via.placeholder.com/60x40" alt="Product img"></td>
                                        <td>Maryam</td>
                                        <td>NOKIA-456</td>
                                        <td>Porterfield 508 Virginia Street Chicago, IL 60653</td>
                                        <td>4</td>
                                        <td><span class="badge badge-success">DONE</span></td>
                                    </tr>
                                    <tr>
                                        <td><img src="http://via.placeholder.com/60x40" alt="Product img"></td>
                                        <td>Micheal</td>
                                        <td>SAMSANG PRO</td>
                                        <td>508 Virginia Street Chicago, IL 60653</td>
                                        <td>1</td>
                                        <td><span class="badge badge-success">DONE</span></td>
                                    </tr>
                                    <tr>
                                        <td><img src="http://via.placeholder.com/60x40" alt="Product img"></td>
                                        <td>Frank</td>
                                        <td>NOKIA-456</td>
                                        <td>1516 Holt Street West Palm Beach, FL 33401</td>
                                        <td>13</td>
                                        <td><span class="badge badge-warning">PENDING</span></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
</body>
@endsection
