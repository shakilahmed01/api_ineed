
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Ineed Registration</title>
</head>

<body>
    <style>
        #customer_form {
            display: block;
        }

        #admin_form {
            display: none;
        }

        #partner_merchant_form {
            display: none;
        }

        #grocery_merchant_form {
            display: none;
        }
        .form-img{
            position: fixed;
            right: 10%;
            top: 10%;
        }
    </style>
    <div class="container">
        <img  src="{{asset('Dashboard/assets/images/admin_logo.png')}}" alt="" width="150">
        <!-- toggle form html -->
        <div class="row ">
            <div class="col-lg-7 col-sm-12">
                <h4>Choose User Type</h4>
                <div class="col-md-12">
                    <!-- User Type choose -->
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="customer"
                            value="option1">
                        <label class="form-check-label" for="customer">Customer</label>
                    </div>

                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="admin"
                            value="option2">
                        <label class="form-check-label" for="admin">Admin</label>
                    </div>

                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="partner_merchant"
                            value="option3">
                        <label class="form-check-label" for="partner_merchant">Partner Marchent</label>
                    </div>

                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="grocery_merchant"
                            value="option4">
                        <label class="form-check-label" for="grocery_merchant">Grocery Marchent</label>
                    </div>

                    <!-- User Type choose -->
                </div>
                <!-- Customer Form -->
                <form class="row g-3" method="POST" action="{{ route('create_account') }}" enctype="multipart/form-data" class="customer_form" id="customer_form">
                  @csrf
                    <div class=" ">
                        <h2>Customer Form</h2>
                    </div>
                    <br>
                    <div class="col-md-6">

                        <input type="hidden" class="form-control" name="role_id" value="0" >
                    </div>
                    <div class="col-md-6">
                        <label for="username0" class="form-label">User Name</label>
                        <input type="text" class="form-control" name="name" id="username0">
                    </div>
                    <div class="col-md-6">
                        <label for="mobile0" class="form-label">Mobile</label>
                        <input type="tel" class="form-control" name="mobile" id="mobile0">
                    </div>
                    <div class="col-md-6">
                        <label for="address0" class="form-label">Address</label>
                        <input type="text" class="form-control" name="address" id="address0">
                    </div>
                    <div class="col-md-6">
                        <label for="city0" class="form-label">City</label>
                        <input type="text" class="form-control" name="city" id="city0">
                    </div>
                    <div class="col-md-6">
                        <label for="post_code0" class="form-label">Post Code</label>
                        <input type="text" class="form-control" name="post_code" id="post_code0">
                    </div>
                    <div class="col-md-6">
                        <label for="country0" class="form-label">Country</label>
                        <input type="text" class="form-control" name="country" id="country0">
                    </div>
                    <div class="col-md-6">
                        <label for="pro_pic0" class="form-label">Profile Picture</label>
                        <input type="file" class="form-control" name="pro_pic" id="pro_pic0">
                    </div>
                    <div class="col-md-6">
                        <label for="password0" class="form-label">Password</label>
                        <input type="password" class="form-control" name="password" id="password0"
                            autocomplete="on">
                    </div>
                    <div class="col-md-6">
                        <label for="password-confirm0" class="form-label">Confirm Password</label>
                        <input type="password" class="form-control" name="password_confirmation" id="password-confirm0"
                            autocomplete="on">
                    </div>


                    <div class="col-12">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="customer_form_gridCheck">
                            <label class="form-check-label" for="gridCheck">
                                Check me out
                            </label>
                        </div>
                    </div>
                    <div class="col-12">
                        <button type="submit" class="btn btn-primary">Sign in</button>

                        <a href="{{route('admin_index')}}" class="btn btn-primary">Go back to Home</a>
                        <hr>
                    </div>
                </form>
                <!-- Customer Form End-->


                <!-- Admin Form -->
                <form class="row g-3" method="POST" action="{{ route('create_account') }}" enctype="multipart/form-data" class="customer_form" id="admin_form">
                  @csrf
                    <div class=" ">
                        <h2>Admin Form</h2>
                    </div>
                    <br>

                    <div class="col-md-6">
                        <label for="username1" class="form-label">User Name</label>
                        <input type="text" class="form-control" name="name" id="username1">
                    </div>
                    <div class="col-md-6">
                        <label for="mobile1" class="form-label">Mobile</label>
                        <input type="tel" class="form-control" name="mobile" id="mobile1">
                    </div>
                    <div class="col-md-6">
                        <label for="permission1" class="form-label">Permission</label>
                        <select id="permission1" name="role_id">
                        <option value="4">Only can add membership form</option>
                        <option value="5">Only Can Update Status</option>
                        <option value="1">All Permission</option>
                        </select>
                    </div>
                    <div class="col-md-6">
                        <label for="password1" class="form-label">Password</label>
                        <input type="password" class="form-control" name="password" id="password1"
                            autocomplete="on">
                    </div>
                    <div class="col-md-6">
                        <label for="password-confirm1" class="form-label">Confirm Password</label>
                        <input type="password" class="form-control" name="password_confirmation" id="password-confirm1"
                            autocomplete="on">
                    </div>
                    <div class="col-12">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="admin_form_gridCheck">
                            <label class="form-check-label" for="gridCheck">
                                Check me out
                            </label>
                        </div>
                    </div>
                    <div class="col-12">
                        <button type="submit" class="btn btn-primary">Sign in</button>
                        <a href="{{route('admin_index')}}" class="btn btn-primary">Go back to Home</a>
                        <hr>
                    </div>
                </form>
                <!-- Admin Form End -->

                <!-- Partner Marchant Form -->
                <form class="row g-3" method="POST" action="{{ route('create_account') }}" enctype="multipart/form-data" class="customer_form" id="partner_merchant_form">
                  @csrf
                    <div class=" ">
                        <h2>Partner Marchant Form</h2>
                    </div>
                    <br>
                    <div class="col-md-6">

                        <input type="hidden" class="form-control" name="role_id" value="3" >
                    </div>
                    <div class="col-md-6">
                        <label for="username3" class="form-label">User Name</label>
                        <input type="text" class="form-control" name="name" id="username3">
                    </div>
                    <div class="col-md-6">
                        <label for="mobile3" class="form-label">Mobile</label>
                        <input type="text" class="form-control" name="mobile" id="mobile3">
                    </div>
                    <div class="col-md-6">
                        <label for="address3" class="form-label">Address</label>
                        <input type="text" class="form-control" name="address" id="address3">
                    </div>
                    <div class="col-md-6">
                        <label for="city3" class="form-label">City</label>
                        <input type="text" class="form-control" name="city" id="city3">
                    </div>
                    <div class="col-md-6">
                        <label for="post_code3" class="form-label">Post Code</label>
                        <input type="text" class="form-control" name="post_code" id="post_code3">
                    </div>
                    <div class="col-md-6">
                        <label for="country3" class="form-label">Country</label>
                        <input type="text" class="form-control" name="country" id="country3">
                    </div>
                    <div class="col-md-6">
                        <label for="pro_pic3" class="form-label">Profile Picture</label>
                        <input type="file" class="form-control" name="pro_pic" id="pro_pic3">
                    </div>
                    <div class="col-md-6">
                        <label for="shop_name3" class="form-label">Shop Name</label>
                        <input type="text" class="form-control" name="shop_name" id="shop_name3">
                    </div>
                    <div class="col-md-6">
                        <label for="shop_address3" class="form-label">Shop Address</label>
                        <input type="text" class="form-control" name="shop_address" id="shop_address3">
                    </div>
                    <div class="form-group">
                    <label for="shop_details3">Shop Details</label>
                    <textarea class="form-control" id="shop_details3" name="shop_details" rows="3"></textarea>
                    </div>
                    <div class="col-md-6">
                        <label for="date_of_birth3" class="form-label">Date Of Birth</label>
                        <input type="date" class="form-control" name="date_of_birth" id="date_of_birth3">
                    </div>
                    <div class="col-md-6">
                        <label for="gender3" class="form-label">Gender</label>
                        <select id="gender3" name="gender">
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                        <option value="Others">Others</option>
                        </select>
                    </div>
                    <div class="col-md-6">
                        <label for="discount_type3" class="form-label">Discount Type</label>
                        <select name="discount_type" id="discount_type3">
                          <option value="Ineed">Ineed give Merchant</option>
                          <option value="Merchant">Merchant give Ineed</option>
                        </select>
                    </div>
                    <div class="col-md-6">
                        <label for="discount3" class="form-label">Discount</label>
                        <input type="text" class="form-control" name="discount" id="discount3">
                    </div>
                    <div class="col-md-6">
                        <label for="shop_photo3" class="form-label">Shop photo</label>
                        <input type="file" class="form-control" name="shop_photo" id="shop_photo3">
                    </div>
                    <div class="col-md-6">
                        <label for="nid_photo3" class="form-label">NID Photo</label>
                        <input type="file" class="form-control" name="nid_photo" id="nid_photo3">
                    </div>
                    <div class="col-md-6">
                        <label for="password3" class="form-label">Password</label>
                        <input type="password" class="form-control" name="password" id="password3"
                            autocomplete="on">
                    </div>
                    <div class="col-md-6">
                        <label for="password-confirm3" class="form-label">Confirm Password</label>
                        <input type="password" class="form-control" name="password_confirmation" id="password-confirm3"
                            autocomplete="on">
                    </div>
                    <div class="col-12">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="partner_merchant_form_gridCheck">
                            <label class="form-check-label" for="gridCheck">
                                Check me out
                            </label>
                        </div>
                    </div>
                    <div class="col-12">
                        <button type="submit" class="btn btn-primary">Sign in</button>
                        <a href="{{route('admin_index')}}" class="btn btn-primary">Go back to Home</a>
                        <hr>
                    </div>
                </form>
                <!-- Partner Marchant Form End -->

                <!-- Grocery Marchant Form -->
                <form class="row g-3" method="POST" action="{{ route('create_account') }}" enctype="multipart/form-data" class="customer_form" id="grocery_merchant_form">
                  @csrf
                    <div class=" ">
                        <h2>Grocery Marchant Form</h2>
                    </div>
                    <br>
                    <div class="col-md-6">

                        <input type="hidden" class="form-control" name="role_id" value="2" >
                    </div>
                    <div class="col-md-6">
                        <label for="username2" class="form-label">User Name</label>
                        <input type="text" class="form-control" name="name" id="username2">
                    </div>
                    <div class="col-md-6">
                        <label for="mobile2" class="form-label">Mobile</label>
                        <input type="text" class="form-control" name="mobile" id="mobile2">
                    </div>
                    <div class="col-md-6">
                        <label for="address2" class="form-label">Address</label>
                        <input type="text" class="form-control" name="address" id="address2">
                    </div>
                    <div class="col-md-6">
                        <label for="city2" class="form-label">City</label>
                        <input type="text" class="form-control" name="city" id="city2">
                    </div>
                    <div class="col-md-6">
                        <label for="post_code2" class="form-label">Post Code</label>
                        <input type="text" class="form-control" name="post_code" id="post_code2">
                    </div>
                    <div class="col-md-6">
                        <label for="country2" class="form-label">Country</label>
                        <input type="text" class="form-control" name="country" id="country2">
                    </div>
                    <div class="col-md-6">
                        <label for="pro_pic2" class="form-label">Profile Picture</label>
                        <input type="file" class="form-control" name="pro_pic" id="pro_pic2">
                    </div>
                    <div class="col-md-6">
                        <label for="shop_name2" class="form-label">Shop Name</label>
                        <input type="text" class="form-control" name="shop_name" id="shop_name2">
                    </div>
                    <div class="col-md-6">
                        <label for="shop_address2" class="form-label">Shop Address</label>
                        <input type="text" class="form-control" name="shop_address" id="shop_address2">
                    </div>
                    <div class="col-md-6">
                        <label for="date_of_birth2" class="form-label">Date Of Birth</label>
                        <input type="date" class="form-control" name="date_of_birth" id="date_of_birth2">
                    </div>
                    <div class="col-md-6">
                        <label for="gender2" class="form-label">Gender</label>
                        <select id="gender2" name="gender">
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                        <option value="Others">Others</option>
                        </select>
                    </div>
                    <div class="col-md-6">
                        <label for="discount2" class="form-label">Discount</label>
                        <input type="text" class="form-control" name="discount" id="discount2">
                    </div>
                    <div class="col-md-6">
                        <label for="shop_photo2" class="form-label">Shop photo</label>
                        <input type="file" class="form-control" name="shop_photo" id="shop_photo2">
                    </div>
                    <div class="col-md-6">
                        <label for="nid_photo2" class="form-label">NID Photo</label>
                        <input type="file" class="form-control" name="nid_photo" id="nid_photo2">
                    </div>
                    <div class="col-md-6">
                        <label for="password2" class="form-label">Password</label>
                        <input type="password" class="form-control" name="password" id="password2"
                            autocomplete="on">
                    </div>
                    <div class="col-md-6">
                        <label for="password-confirm2" class="form-label">Confirm Password</label>
                        <input type="password" class="form-control" name="password_confirmation" id="password-confirm2"
                            autocomplete="on">
                    </div>

                    <div class="col-12">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="grocery_merchant_form_gridCheck">
                            <label class="form-check-label" for="gridCheck">
                                Check me out
                            </label>
                        </div>
                    </div>
                    <div class="col-12">
                        <button type="submit" class="btn btn-primary">Sign in</button>
                        <a href="{{route('admin_index')}}" class="btn btn-primary">Go back to Home</a>
                        <hr>
                    </div>
                    <hr>
                </form>
                <!-- Grocery Marchant Form End -->


            </div>
            <div class="col-lg-5 my-auto form-img">
                <img src="{{asset('Dashboard/assets/images/signup.svg')}}" alt="">
            </div>
        </div>
        <!-- toggle form html -->
    </div>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>

    <script>
        //  Select ID
        const customer = document.getElementById("customer");
        const admin = document.getElementById("admin");
        const partner_merchant = document.getElementById("partner_merchant");
        const grocery_merchant = document.getElementById("grocery_merchant");
        // console.log(customer);
        // console.log(admin);
        // console.log(partner_merchant);
        // console.log(grocery_merchant);

        //form id
        const customer_form = document.getElementById("customer_form");
        const admin_form = document.getElementById("admin_form");
        const partner_merchant_form = document.getElementById("partner_merchant_form");
        const grocery_merchant_form = document.getElementById("grocery_merchant_form");

        customer.addEventListener("change", () => {
            console.log("clicked");
            customer_form.style.display = "block";
            admin_form.style.display = "none";
            partner_merchant_form.style.display = "none";
            grocery_merchant_form.style.display = "none";
        });
        admin.addEventListener("change", () => {
            // console.log("clicked");
            customer_form.style.display = "none";
            admin_form.style.display = "block";
            partner_merchant_form.style.display = "none";
            grocery_merchant_form.style.display = "none";
        });
        partner_merchant.addEventListener("click", () => {
            // console.log("clicked");
            customer_form.style.display = "none";
            admin_form.style.display = "none";
            partner_merchant_form.style.display = "block";
            grocery_merchant_form.style.display = "none";
        });
        grocery_merchant.addEventListener("click", () => {
            // console.log("clicked");
            customer_form.style.display = "none";
            admin_form.style.display = "none";
            partner_merchant_form.style.display = "none";
            grocery_merchant_form.style.display = "block";
        });
    </script>
</body>

</html>
