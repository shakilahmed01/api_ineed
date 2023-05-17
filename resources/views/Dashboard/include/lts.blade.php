<aside id="leftsidebar" class="sidebar">
    <div class="navbar-brand">
        <button class="btn-menu ls-toggle-btn" type="button"><i class="zmdi zmdi-menu"></i></button>
        <a href="{{route('admin_index')}}"><img src="{{asset('public/Dashboard/assets/images/admin logo.png')}}" width="100" alt="ineed"><span class="m-l-10">Admin</span></a>
    </div>
    <style media="screen">
      .menu{
        background-color: #008acb;
        color: #ffffff;
      }
      .menu span{
        color: #ffffff;
        font-size: 18px;
        font-weight: bold;
      }

    </style>
    <div class="menu" >
        <ul class="list">
            <li>
                <div class="user-info">
                    <a class="image" href="profile.html"><img src="{{asset('Dashboard/assets/images/profile_av.jpg')}}" alt="User"></a>
                    <div class="detail">
                        <h4>{{ Auth::user()->name }}</h4>
                        <small>Super Admin</small>
                    </div>
                    <a class="dropdown-item" href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </div>
            </li>
            <li><a href="{{route('admin_index')}}"><i class="zmdi zmdi-home"></i><span>Dashboard</span></a></li>
            <li><a href="{{route('profile')}}"><i class="zmdi zmdi-account"></i><span>Admin Profile</span></a></li>
            <li><a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-apps"></i><span>Registration Form</span></a>
                <ul class="ml-menu">
                  <li><a href="{{route('register2_view')}}">Create Authentication Account</a></li>
                  <li><a href="{{route('add_user_formv1')}}">User Registration Form</a></li>
                  <li><a href="{{route('discount_store')}}">Discount store Form</a></li>
                  <li><a href="{{route('grocery_store_form')}}">Grocery store Form</a></li>
                  <li><a href="{{route('offer_form')}}">Offers Form</a></li>
                  <li><a href="{{route('payments')}}">Payments Form</a></li>

                </ul>
            </li>

            <li class="active open"><a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-swap-alt"></i><span>Approval Menu</span></a>
                <ul class="ml-menu">

                     <li><a href="{{route('withdraw_view')}}">Withdraw Tables Approval</a></li>
                     <li><a href="{{route('membership_approval_view')}}">Membership Tables Approval</a></li>
                    
                </ul>
            </li>

            <li class="active open"><a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-swap-alt"></i><span>I need</span></a>
                <ul class="ml-menu">

                    <li><a href="{{route('view_user')}}">Membership user details</a></li>
                    <li><a href="{{route('view_category')}}">Card Name list</a></li>
                    <li><a href="{{route('view_subcategory')}}">Card Number List</a></li>
                    <li><a href="{{route('view_discount_store')}}">Discount Store List</a></li>
                    <li><a href="{{route('view_grocery')}}">Grocery Store List</a></li>
                    <li><a href="{{route('view_payments')}}">payments List</a></li>
                    <li><a href="{{route('view_become_merchant')}}">Become a Merchant List</a></li>
                    <li><a href="{{route('view_offer_list')}}">Offers List</a></li>
                </ul>
            </li>
            
            <li class="active open"><a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-swap-alt"></i><span>Users lists Menu</span></a>
                <ul class="ml-menu">

                    <li><a href="{{route('list_customer')}}">Customer List</a></li>
                    <li><a href="{{route('list_grocery_merchent')}}">Grocery Merchant List</a></li>
                    <li><a href="{{route('list_partner_merchent')}}">Partner Merchant List</a></li>
                    
                </ul>
            </li>
            
            <li class="active open"><a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-swap-alt"></i><span>Payments Menu</span></a>
                <ul class="ml-menu">

                    <li><a href="{{route('list_payment_grocery_merchent')}}">Grocery Merchant Payment List</a></li>
                    <li><a href="{{route('list_payment_partner_merchent')}}">Partner Merchant Payment List</a></li>

                </ul>
            </li>
            <!-- <li><a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-swap-alt"></i><span>Components</span></a>
                <ul class="ml-menu">
                    <li><a href="ui_kit.html">Aero UI KIT</a></li>
                    <li><a href="alerts.html">Alerts</a></li>
                    <li><a href="collapse.html">Collapse</a></li>
                    <li><a href="colors.html">Colors</a></li>
                    <li><a href="dialogs.html">Dialogs</a></li>
                    <li><a href="list-group.html">List Group</a></li>
                    <li><a href="media-object.html">Media Object</a></li>
                    <li><a href="modals.html">Modals</a></li>
                    <li><a href="notifications.html">Notifications</a></li>
                    <li><a href="progressbars.html">Progress Bars</a></li>
                    <li><a href="range-sliders.html">Range Sliders</a></li>
                    <li><a href="sortable-nestable.html">Sortable & Nestable</a></li>
                    <li><a href="tabs.html">Tabs</a></li>
                    <li><a href="waves.html">Waves</a></li>
                </ul>
            </li>
            <li><a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-flower"></i><span>Font Icons</span></a>
                <ul class="ml-menu">
                    <li><a href="icons.html">Material Icons</a></li>
                    <li><a href="icons-themify.html">Themify Icons</a></li>
                    <li><a href="icons-weather.html">Weather Icons</a></li>
                </ul>
            </li>
            <li><a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-assignment"></i><span>Forms</span></a>
                <ul class="ml-menu">
                    <li><a href="basic-form-elements.html">Basic Form</a></li>
                    <li><a href="advanced-form-elements.html">Advanced Form</a></li>
                    <li><a href="form-examples.html">Form Examples</a></li>
                    <li><a href="form-validation.html">Form Validation</a></li>
                    <li><a href="form-wizard.html">Form Wizard</a></li>
                    <li><a href="form-editors.html">Editors</a></li>
                    <li><a href="form-upload.html">File Upload</a></li>
                    <li><a href="form-summernote.html">Summernote</a></li>
                </ul>
            </li>
            <li><a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-grid"></i><span>Tables</span></a>
                <ul class="ml-menu">
                    <li><a href="normal-tables.html">Normal Tables</a></li>
                    <li><a href="jquery-datatable.html">Jquery Datatables</a></li>
                    <li><a href="editable-table.html">Editable Tables</a></li>
                    <li><a href="footable.html">Foo Tables</a></li>
                    <li><a href="table-color.html">Tables Color</a></li>
                </ul>
            </li>
            <li><a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-chart"></i><span>Charts</span></a>
                <ul class="ml-menu">
                    <li><a href="echarts.html">E Chart</a></li>
                    <li><a href="c3.html">C3 Chart</a></li>
                    <li><a href="morris.html">Morris</a></li>
                    <li><a href="flot.html">Flot</a></li>
                    <li><a href="chartjs.html">ChartJS</a></li>
                    <li><a href="sparkline.html">Sparkline</a></li>
                    <li><a href="jquery-knob.html">Jquery Knob</a></li>
                </ul>
            </li>
            <li><a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-delicious"></i><span>Widgets</span></a>
                <ul class="ml-menu">
                    <li><a href="widgets-app.html">Apps Widgets</a></li>
                    <li><a href="widgets-data.html">Data Widgets</a></li>
                </ul>
            </li>
            <li><a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-lock"></i><span>Authentication</span></a>
                <ul class="ml-menu">
                    <li><a href="sign-in.html">Sign In</a></li>
                    <li><a href="sign-up.html">Sign Up</a></li>
                    <li><a href="forgot-password.html">Forgot Password</a></li>
                    <li><a href="404.html">Page 404</a></li>
                    <li><a href="500.html">Page 500</a></li>
                    <li><a href="page-offline.html">Page Offline</a></li>
                    <li><a href="locked.html">Locked Screen</a></li>
                </ul>
            </li>
            <li class="open_top"><a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-copy"></i><span>Sample Pages</span></a>
                <ul class="ml-menu">
                    <li><a href="blank.html">Blank Page</a></li>
                    <li><a href="image-gallery.html">Image Gallery</a></li>
                    <li><a href="profile.html">Profile</a></li>
                    <li><a href="timeline.html">Timeline</a></li>
                    <li><a href="pricing.html">Pricing</a></li>
                    <li><a href="invoices.html">Invoices</a></li>
                    <li><a href="invoices-list.html">Invoices List</a></li>
                    <li><a href="search-results.html">Search Results</a></li>
                </ul>
            </li>
            <li class="open_top"><a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-map"></i><span>Maps</span></a>
                <ul class="ml-menu">
                    <li><a href="google.html">Google Map</a></li>
                    <li><a href="yandex.html">YandexMap</a></li>
                    <li><a href="jvectormap.html">jVectorMap</a></li>
                </ul>
            </li> -->
            <li>
                <div class="progress-container progress-primary m-t-10">
                    <span class="progress-badge">Traffic this Month</span>
                    <div class="progress">
                        <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="67" aria-valuemin="0" aria-valuemax="100" style="width: 67%;">
                            <span class="progress-value">67%</span>
                        </div>
                    </div>
                </div>
                <div class="progress-container progress-info">
                    <span class="progress-badge">Server Load</span>
                    <div class="progress">
                        <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="86" aria-valuemin="0" aria-valuemax="100" style="width: 86%;">
                            <span class="progress-value">86%</span>
                        </div>
                    </div>
                </div>
            </li>
        </ul>
    </div>
</aside>
