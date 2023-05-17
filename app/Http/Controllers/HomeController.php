<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserRegistration;
use App\Models\Category;
use App\Models\Grocery_store;
use App\Models\Discount_store;
use App\Models\Offers;
use App\Models\Payments;
use Auth;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
      // $this->middleware('auth');

    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
         // return view('home');
        if(Auth::user()->role_id == 0){
          return redirect()->route('user_home');
        }
        elseif(Auth::user()->role_id == 3){
          return redirect()->route('merchant_form');
        }
        elseif(Auth::user()->role_id == 2){
          return redirect()->route('merchant_form');
        }
        elseif(Auth::user()->role_id == 4){
          return redirect()->route('membership_form');
        }
        else{
          return redirect()->route('admin_index');
        }
    }

}
