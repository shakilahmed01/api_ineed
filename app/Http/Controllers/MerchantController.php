<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\UserRegistration;
use App\Models\Category;
use App\Models\Subcategory;
class MerchantController extends Controller
{
    //
    public function __construct(){
      $this->middleware('auth');
      $this->middleware('role');
    }

    //begin payments
         function merchant_form(){
           $categories = Category::all();
           $sub_categories = Subcategory::all();
           $users = User::all();
           return view('Dashboard.Merchant.merchant_form',compact('categories','sub_categories','users'));
         }

    //end payments
}
