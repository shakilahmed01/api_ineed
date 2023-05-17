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
use Carbon\Carbon;
class FrontendController extends Controller
{

    //

    //custom login view
    function register_view(){
      return view('Dashboard.admin.admin_register');
    }
    
    function register2_view(){
      return view('Dashboard.admin.admin_register2');
    }
    
    function login_view(){
      return view('Dashboard.admin.admin_login');
    }

    //End custom login view
    function user_index(){

      return view('Dashboard.frontend.index');
    }

    function profile(){
      return view('Dashboard.user_profile');
    }

    function user_home(){

      $cards=UserRegistration::where('name', Auth::user()->id)->get();
      // $cards=UserRegistration::all();
      $category=Category::all();
      $offer=Offers::all()->count();
      return view('Dashboard.frontend.customer_home',compact('cards','category','offer'));
    }
//grocery details search
      public function grocery_search(Request $request){
      // Get the search value from the request
           $store_name = $request->input('store_name');



          // Search in the title and body columns from the posts table
          $p = Grocery_store::query()
               ->where('store_name', 'LIKE', "%{$store_name}%")


              ->get();


          // Return the search view with the resluts compacted

          return view('Dashboard.frontend.grocery_store_search', compact('p'));
      }

    function grocery_store(){
      $grocery=Grocery_store::all();
      return view('Dashboard.frontend.grocery_store',compact('grocery'));
    }

    function customer_profile(){
      return view('Dashboard.frontend.customer_profile');
    }

    function company_profile(){
      return view('Dashboard.frontend.company_profile');
    }

    function grocery_summary(){
      $cards=UserRegistration::where('name', Auth::user()->id)->get();
      $payments=Payments::where('name', Auth::user()->id)->get();
      $category=Category::all();
      return view('Dashboard.frontend.grocery_summary',compact('cards','category','payments'));
    }

    function discount_table(){
      $store=Discount_store::all();
      $payments=Payments::where('name', Auth::user()->id)->get();
      // $discount_price=Payments::where('price*category_discount%')->get();
      return view('Dashboard.frontend.discount_table',compact('store','payments'));
    }

    function notification_view(){
      $offers=Offers::all();
      $offer=Offers::all()->count();
      return view('Dashboard.frontend.notification_view',compact('offers','offer'));
    }

    function qrcode_view(){
      $offers=Offers::all();
      return view('qr_code',compact('offers'));
    }

}
