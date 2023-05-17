
<!doctype html>
<html lang="en">
@include('Dashboard.frontend.include.header')
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
               <a class="dropdown-item" href="{{route('notification_view')}}">
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
              <th>Name</th>
              <th>Memberhip Card</th>
                <th> Card number</th>
                <th>Percentage (%)</th>
                <th>Card Amount</th>
            </tr>
        </thead>

        <tbody>
            <a href="#">
              @foreach($cards as $card)
                <tr data-href="https://www.google.com/">
                   <a href="#">
                     <td>{{Auth::user()->name}}</td>

                    <td>{{$card->relationBetweenCategory->category_name}}</td>
                    <td>{{$card->relationBetweenSubCategory->subcategory_card_number}}</td>
                    <td>{{$card->relationBetweenCategory->category_discount}}</td>
                    <td>{{$card->card_ammount}}</td>
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
@include('Dashboard.frontend.include.footer')

  </body>
</html>
