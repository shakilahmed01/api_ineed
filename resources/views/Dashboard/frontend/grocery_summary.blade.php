<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Grocery Summary</title>
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    />
    <link
      rel="stylesheet"
      href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css"
    />

    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
      integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
      crossorigin="anonymous"
    />

    <!-- favicon size 64x64 not good -->
    <link rel="icon" type="image/png" href="{{asset('Dashboard/assets_kayes/media/iNeedfavicon.ico')}}" />

    <!-- Bootstrap Font Icon CSS -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css"
    />
    <!-- Custom CSS for footer -->
    <link rel="stylesheet" href="{{asset('Dashboard/assets_kayes/css/styles.css')}}" />



    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

    <!-- <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script> -->
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
    <script>
      $(".mydatatable").DataTable();
    </script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
      crossorigin="anonymous"
    ></script>
  </head>
  <style>
    select.custom-select .custom-select-sm .form-control .form-control-sm {
      padding-right: 17%;
    }
  </style>
  <body>
    <header>
      <!-- needed -->
      <div class="container">
        <header
          class="
            d-flex
            flex-wrap
            align-items-center
            justify-content-center justify-content-lg-between
            py-3
            mb-4
            border-bottom
          "
          style="background: rgb(255, 255, 255)"
        >
          <a
            href="#"
            class="
              d-flex
              align-items-center
              col-md-3
              mb-2 mb-md-0
              text-dark text-decoration-none
            "
          >
            <img
              src="{{asset('Dashboard/assets_kayes/media/logo_v3_withoutSlogan.png')}}"
              class="img-fluid"
              alt="Responsive image"
              style="max-width: 60%"
            />
          </a>

          <!-- <ul class=""> -->
          <div
            class="
              cardinfo
              justify-content-center
              col-12 col-md-auto
              mb-2 mb-md-0
            "
          >
            <div class="card-name">
              @foreach($cards as $card)
                <h1>Card Name : {{$card->relationBetweenCategory->category_name}}</h1>
                @endforeach
            </div>
            <div class="card-number">
            @foreach($cards as $card)
              <h4>Card Number : {{$card->relationBetweenSubCategory->subcategory_card_number}}</h4>
              @endforeach
            </div>
            <div class="card-amount">
              @foreach($cards as $card)
                <h4>Card Amount : {{$card->card_ammount}}</h4>
                @endforeach
            </div>
          </div>
          <!-- </ul>   -->

          <div class="dropdown text-end">
            <a
              href="#"
              class="d-block link-dark text-decoration-none dropdown-toggle"
              id="dropdownUser1"
              data-bs-toggle="dropdown"
              aria-expanded="false"
            >
              <img
                src="https://github.com/mdo.png"
                alt="mdo"
                width="32"
                height="32"
                class="rounded-circle"
              />
            </a>
            <ul
              class="dropdown-menu text-small"
              aria-labelledby="dropdownUser1"
            >
              <!-- <li><a class="dropdown-item" href="#">New project...</a></li> -->
              <li>
                <a class="dropdown-item" href="#">
                  Notifications <i class="bi bi-bell"></i>
                </a>
              </li>
              <li><a class="dropdown-item" href="#">Profile</a></li>
              <li><hr class="dropdown-divider" /></li>
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
        </header>
      </div>
      <style>
        .custom-badge {
            display: inline-block;
            padding: 0.35em  0.65em ;
            font-size: 0.75em;
            font-weight: 700;
            line-height: 1;
            color: #fff;
            text-align: center;
            white-space: nowrap;
            vertical-align: baseline;
            border-radius: 0.25 rem;
            width: 150 px !important;
            height: 29 px !important;
            padding: 8 px 1 px 1 px 1 px !important;
        }
      </style>

      <!-- needed -->
    </header>
    <div class="container mb-3 mt-3">
      <table class="table table-bordered mydatatable"  style="width: 100%;  background: linear-gradient(to right, #c6ece5, #acb6e5);"  >
        <thead>
          <tr>
            <th>Month</th>
            <th>Date</th>
            <th>Shop</th>
            <th>Ammount</th>
            <th>Status</th>
          </tr>
        </thead>
        <tbody>
          <!-- <tr>
            @foreach($payments as $payment)
            <th>{{$payment->created_at}}</th>
            @endforeach
            @foreach($payments as $payment)
            <th>{{$payment->created_at}}</th>
            @endforeach
            @foreach($payments as $payment)
            <th>{{$payment->store_name}}</th>
            @endforeach
            @foreach($payments as $payment)
            <th>{{$payment->price}}</th>
            @endforeach
            <th>
              <span class="badge badge-primary">Processing</span>
                </div>
            </th>
          </tr> -->
          @foreach($payments as $payment)
          <tr>
            <th>{{$payment->created_at->diffForHumans()}}</th>
            <th>{{$payment->created_at}}</th>
            <th>{{$payment->store_name}}</th>
            <th>{{$payment->price}}</th>
            <th>
              <span class="badge badge-dark">Shipped</span>
                </div>
            </th>
          </tr>
          @endforeach

        </tbody>
      </table>
    </div>
    <!-- Footer-->
    <link rel="stylesheet" href="{{asset('Dashboard/assets_kayes/css/styles.css')}}"/>
    <style>
      footer a {
        color: rgba(255, 255, 255, 0.5);
        text-decoration: none;
      }
      footer a:hover,
      footer a:active,
      footer a:focus {
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

  </body>
</html>
