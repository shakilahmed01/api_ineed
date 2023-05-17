<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\UserRegistration;
use App\Models\Customer;
use App\Models\Category;
use App\Models\Subcategory;
use App\Models\ExistUser;
use App\Models\Discount_store;
use App\Models\Grocery_store;
use App\Models\Payments;
use App\Models\Offers;
use App\Models\Withdraw;
use App\Models\Become_merchant;
use Carbon\Carbon;
use Validator;
use Image;
class DashboardController extends Controller
{

    public function __construct(){
      $this->middleware('auth');
      $this->middleware('role');

    }
    
    //invoice 
    public function user_invoice(){
        $lists=UserRegistration::where('status', '=', "Approved")->latest()->simplePaginate(1);
        
        return view('invoice.user_invoice',compact('lists'));
    }
    
    function invoice_page($id){

        $list=UserRegistration::findOrFail($id);
        return view('invoice.single_invoice_page',compact('list'));
      }
    
    //  public function user_invoice_search(Request $request){
    //      $user_mobile = $request->input('user_mobile');
         
    //     $lists=UserRegistration::where('status', '=', "Approved")->where('user_mobile','=', $user_mobile);
        
    //     return view('invoice.user_invoice',compact('lists'));
    // }
    //all user list
    public function list_customer(){
      $lists=User::where('role_id', '=', 0)->get();

      return view('Dashboard.user.all_customer_list',compact('lists'));
    }
    public function list_partner_merchent(){
      $lists=User::where('role_id', '=', 3)->get();

      return view('Dashboard.user.all_partner_merchant_list',compact('lists'));
    }
    public function list_grocery_merchent(){
      $lists=User::where('role_id', '=', 2)->get();

      return view('Dashboard.user.all_grocery_merchant_list',compact('lists'));
    }
    
    //all Payment list

    public function list_payment_partner_merchent(){
      $lists=Payments::where('role_id', '=', 3)->get();

      return view('Dashboard.payments.all_payment_partner_merchant_list',compact('lists'));
    }
    public function list_payment_grocery_merchent(){
      $lists=Payments::where('role_id', '=', 2)->get();

      return view('Dashboard.payments.all_payment_grocery_merchant_list',compact('lists'));
    }


    //permission
    function membership_form(){
      $categories = Category::all();
      $sub_categories = Subcategory::all();
      $users = User::all();
      return view('membership_form',compact('categories','sub_categories','users'));
    }
    
    
  public function index(){
    $users=UserRegistration::all()->count();
    $discount=Category::all()->count();
    $grocery_store=Grocery_store::all()->count();
    $discount_store=Discount_store::all()->count();
      return view('Dashboard.admin_dashboard',compact('users','discount','grocery_store','discount_store'));
    }
    
        //create account

    public function create_account(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'mobile' => 'required',
            'role_id' => 'required',
            'password' => 'required',
            'password_confirmation' => 'required|same:password',
        ]);
        if ($validator->fails()) {
            return response()->json(['error'=>$validator->errors()], 401);
        }
        $auth_image=User::insertGetId([
                        'name'=>$request->name,
                        'mobile'=>$request->mobile,
                        'shop_name'=>$request->shop_name,
                        'shop_address'=>$request->shop_address,
                        'shop_photo'=>$request->shop_photo,
                        'shop_details'=>$request->shop_details,
                        'date_of_birth'=>$request->date_of_birth,
                        'gender'=>$request->gender,
                        'nid_photo'=>$request->nid_photo,
                        'address'=>$request->address,
                        'city'=>$request->city,
                        'post_code'=>$request->post_code,
                        'country'=>$request->country,
                        'pro_pic'=>$request->pro_pic,
                        'discount'=>$request->discount,
                        'discount_type'=>$request->discount_type,
                        'category_type'=>$request->category_type,
                        'customer_discount'=>$request->customer_discount,
                        'role_id'=>$request->role_id,
                        'password'=>Hash::make($request['password']),
                        'created_at'   =>Carbon::now()

                      ]);
                      if ($request->hasFile('shop_photo')) {
                          $photo_upload     =  $request ->shop_photo;
                          $photo_extension  =  $photo_upload -> getClientOriginalExtension();
                          $photo_name       =  "ineed_user_shop_photo_". $auth_image . "." . $photo_extension;
                          Image::make($photo_upload)->resize(452,510)->save(base_path('public/uploads/auths/'.$photo_name),100);
                          User::find($auth_image)->update([
                          'shop_photo'          => $photo_name,
                              ]);
                            }

                            if ($request->hasFile('nid_photo')) {
                                $photo_upload     =  $request ->nid_photo;
                                $photo_extension  =  $photo_upload -> getClientOriginalExtension();
                                $photo_name       =  "ineed_user_nid_photo". $auth_image . "." . $photo_extension;
                                Image::make($photo_upload)->resize(452,510)->save(base_path('public/uploads/auths/'.$photo_name),100);
                                User::find($auth_image)->update([
                                'nid_photo'          => $photo_name,
                                    ]);
                                  }

                                  if ($request->hasFile('pro_pic')) {
                                      $photo_upload     =  $request ->pro_pic;
                                      $photo_extension  =  $photo_upload -> getClientOriginalExtension();
                                      $photo_name       =  "ineed_user_pro_pic". $auth_image . "." . $photo_extension;
                                      Image::make($photo_upload)->resize(452,510)->save(base_path('public/uploads/auths/'.$photo_name),100);
                                      User::find($auth_image)->update([
                                      'pro_pic'          => $photo_name,
                                          ]);
                                        }


        return back();
    }

//withdraw approval view
    function withdraw_view(){
      $lists=Withdraw::where('withdraw_photo', '=',null)->latest()->simplePaginate(1);
      return view('Dashboard.admin.withdraw_view',compact('lists'));
    }
//membership approval view
        function membership_approval_view(){
          $lists=UserRegistration::where('store_name', '=',null)->get();

          return view('Dashboard.admin.membership_approval_view',compact('lists'));
        }
        
    //withdraw approval
    function withdraw_approved($id, $status )
    {
      if ($status == 'Approved') {
                   Withdraw::findOrFail($id)->update([
                       'status' => "Under Review",
                       'approval_date' => Carbon::now(),
                   ]);
               } else {
                       Withdraw::findOrFail($id)->update([
                       'status' => "Approved",
                       'approval_date' => Carbon::now(),
                   ]);
               }



         return back();
    }

    //membership approval
    function membership_approved($id, $status )
    {
      if ($status == 'Approved') {
                   UserRegistration::findOrFail($id)->update([
                       'status' => "Processing",

                   ]);
               } else {
                       UserRegistration::findOrFail($id)->update([
                       'status' => "Approved",

                   ]);
               }



         return back();
    }

    //withdraw data search
    function withdraw_search(Request $request){
      $user_mobile = $request->input('user_mobile');

   $lists = Withdraw::where('user_mobile', '=', $user_mobile)->get();

   return view('Dashboard.admin.withdraw_view',compact('lists'));

    }
    
    //membership approval data search
        function membership_approval_search_mobile(Request $request){
          $user_mobile = $request->input('user_mobile');

       $lists = UserRegistration::where('user_mobile', '=', $user_mobile)->get();
       $trashed_user=UserRegistration::onlyTrashed()->get();

       return view('Dashboard.admin.membership_approval_view',compact('lists','trashed_user'));

        }

        function membership_approval_search_card(Request $request){
          $card_number = $request->input('card_number');

       $lists = UserRegistration::where('card_number', '=', $card_number)->get();
       $trashed_user=UserRegistration::onlyTrashed()->get();

       return view('Dashboard.admin.membership_approval_view',compact('lists','trashed_user'));

        }

//begin UserRegistration
    function add_user_form(){
      $categories = Category::all();
      $sub_categories = Subcategory::all();
      $users = User::all();
      return view('Dashboard.user.add_user',compact('categories','sub_categories','users'));
      }

      function add_user_formv1(){
        $categories = Category::all();
        $sub_categories = Subcategory::all();
        $users = User::all();
        return view('Dashboard.user.add_userv1',compact('categories','sub_categories','users'));
        }

    function post_user_information(Request $request){
      $validator = Validator::make($request->all(), [
          
          'card_number' => 'required|unique:user_registrations'
      ]);
      if ($validator->fails())
         {
         $messages = $validator->messages();
        return back()->with('success','card number must be unique.');
         }


    //return $request;
      $totalmonth=$request->card_ammount%$request->limit;
      
      $bal=$request->card_ammount-$totalmonth;
      
      $sal=$bal/$request->limit;
      
      //dd($sal);
      
      $now = Carbon::now();
            
        $current_month=$now->month;
           
      

        for($i=0;$i<$sal;$i++){    
    
      $user=UserRegistration::insertGetId([
          
        'current_month'=>$current_month,
        'user_id'=>$request->user_id,
        'user_mobile'=>$request->user_mobile,
        'user_name'=>$request->user_name,
        'email'=>$request->email,
        'card_name'=>$request->card_name,
        'card_number'=>$request->card_number,
        'card_ammount'=>$request->card_ammount,
        'limit'=>$request->limit,
        'expire_date'=>$request->expire_date,
        'status'=>($i==0)?'Approved':$request->status,
        'address'=>$request->address,
        'photo'=>$request->photo,
        'created_at'   =>Carbon::now()
      ]);
      if ($request->hasFile('photo')) {
          $photo_upload     =  $request ->photo;
          $photo_extension  =  $photo_upload -> getClientOriginalExtension();
          $photo_name       =  "i_need_user_". $user . "." . $photo_extension;
          Image::make($photo_upload)->resize(100,100)->save(base_path('public/uploads/users/'.$photo_name),100);
          UserRegistration::find($user)->update([
          'photo'          => $photo_name,
              ]);
            }
        
            $current_month++;
        }
      return back()->with('success','User have successfully registered.');
    }

    function user_edit($id){

        $list=User::findOrFail($id);
        return view('Dashboard.user.single_user_list',compact('list'));
      }
      function user_update(Request $request){

        $user=UserRegistration::findOrFail($request->id)->update([
          'user_mobile'=>$request->user_mobile,
          'email'=>$request->email,
          'card_name'=>$request->card_name,
          'card_number'=>$request->card_number,
          'card_ammount'=>$request->card_ammount,
          'limit'=>$request->limit,
          'address'=>$request->address,


        ]);


        if ($request->hasFile('photo')) {

            $photo_upload     =  $request ->photo;
            $photo_extension  =  $photo_upload -> getClientOriginalExtension();
            $photo_name       =  "i_need_user_". $user . "." . $photo_extension;
            Image::make($photo_upload)->resize(250,350)->save(base_path('public/uploads/users/'.$photo_name),100);
            UserRegistration::find($user)->update([
            'photo'          => $photo_name,
                ]);


              }
        return back();
      }
      function user_delete($id){
          $list=UserRegistration::findOrFail($id)->delete();
          return back();
        }

        function user_restore($id){
            UserRegistration::onlyTrashed()->findOrFail($id)->restore();
            return back();
          }
//end UserRegistration

//Ajax function
    public  function get_subcategory(Request $request)
      {

      //  echo "shakil";
          $x = Subcategory::where('category_id',$request->main_category_id)->get();

          $dataSend ='';
          foreach ($x as $xs) {
            $dataSend .= "<option value='$xs->id'>$xs->subcategory_card_number</option>";
          }

          return $dataSend;
      }

//end Ajax function

    function view_user(){
      $lists=UserRegistration::all();
      $trashed_user=UserRegistration::onlyTrashed()->get();
      return view('Dashboard.view_user',compact('lists','trashed_user'));
    }


    function customer(){
      return view('Dashboard.customer');
    }

    function add_customer(Request $request){
      Customer::insert([
        'name'=>$request->name,
        'email'=>$request->email,

        'created_at'            =>Carbon::now()
      ]);
      return back();
    }


//begin Store
    function grocery_store(){
      return view('Dashboard.grocery_store.grocery');
    }
    function add_grocery(Request $request){
      $store=Grocery_store::insertGetId([
        'store_name'=>$request->store_name,
        'store_location'=>$request->store_location,
        'phone'=>$request->phone,
        'price'=>$request->price,
        'photo'=>$request->photo,
        'created_at'   =>Carbon::now()
      ]);
      if ($request->hasFile('photo')) {
          $photo_upload     =  $request ->photo;
          $photo_extension  =  $photo_upload -> getClientOriginalExtension();
          $photo_name       =  "i_need_grocery_store_". $store . "." . $photo_extension;
          Image::make($photo_upload)->resize(100,100)->save(base_path('public/uploads/grocery_stores/'.$photo_name),100);
          Grocery_store::find($store)->update([
          'photo'          => $photo_name,
              ]);
            }
      return back()->with('success','Data have successfully Added.');
    }
    function view_grocery(){
      $lists=Grocery_store::all();
      $trashed_grocery=Grocery_store::onlyTrashed()->get();
      return view('Dashboard.grocery_store.view_grocery_store',compact('lists','trashed_grocery'));
    }
    function grocery_edit($id){

        $list=Grocery_store::findOrFail($id);
        return view('Dashboard.grocery_store.single_grocery_store',compact('list'));
      }
      function grocery_update(Request $request){

        $store=Grocery_store::findOrFail($request->id)->update([
          'store_name'=>$request->store_name,
          'store_location'=>$request->store_location,
          'price'=>$request->price,
          'phone'=>$request->phone,


        ]);
        if ($request->hasFile('photo')) {

            $photo_upload     =  $request ->photo;
            $photo_extension  =  $photo_upload -> getClientOriginalExtension();
            $photo_name       =  "i_need_grocery_store_". $store . "." . $photo_extension;
            Image::make($photo_upload)->resize(250,350)->save(base_path('public/uploads/grocery_stores/'.$photo_name),100);
            Grocery_store::find($store)->update([
            'photo'          => $photo_name,
                ]);
              }
        return back();
      }
      function grocery_delete($id){
          $list=Grocery_store::findOrFail($id)->delete();
          return back();
        }

        function grocery_restore($id){
            Grocery_store::onlyTrashed()->findOrFail($id)->restore();
            return back();
          }

    function discount_store(){
      return view('Dashboard.discount_store.discount');
    }
    function add_discount(Request $request){

        $store=Discount_store::insertGetId([
          'store_name'=>$request->store_name,
          'store_location'=>$request->store_location,
          'phone'=>$request->phone,
          'price'=>$request->price,
          'photo'=>$request->photo,
          'created_at'   =>Carbon::now()
        ]);
        if ($request->hasFile('photo')) {
            $photo_upload     =  $request ->photo;
            $photo_extension  =  $photo_upload -> getClientOriginalExtension();
            $photo_name       =  "i_need_store_". $store . "." . $photo_extension;
            Image::make($photo_upload)->resize(100,100)->save(base_path('public/uploads/stores/'.$photo_name),100);
            Discount_store::find($store)->update([
            'photo'          => $photo_name,
                ]);
              }
        return back()->with('success','Data have successfully Added.');

    }

    function view_discount_store(){
      $lists=Discount_store::all();

      $trashed_dis=Discount_store::onlyTrashed()->get();

      return view('Dashboard.discount_store.view_discount_store',compact('lists','trashed_dis'));
    }

    function dis_edit($id){

        $list=Discount_store::findOrFail($id);
        return view('Dashboard.discount_store.single_discount_store',compact('list'));
      }
      function dis_update(Request $request){

        $store=Discount_store::findOrFail($request->id)->update([
          'store_name'=>$request->store_name,
          'store_location'=>$request->store_location,
          'price'=>$request->price,
          'phone'=>$request->phone,


        ]);
        if ($request->hasFile('photo')) {

            $photo_upload     =  $request ->photo;
            $photo_extension  =  $photo_upload -> getClientOriginalExtension();
            $photo_name       =  "i_need_store_". $store . "." . $photo_extension;
            Image::make($photo_upload)->resize(250,350)->save(base_path('public/uploads/stores/'.$photo_name),100);
            Discount_store::find($store)->update([
            'photo'          => $photo_name,
                ]);
              }
        return back();
      }
      function dis_delete($id){
          $list=Discount_store::findOrFail($id)->delete();
          return back();
        }

        function dis_restore($id){
            Discount_store::onlyTrashed()->findOrFail($id)->restore();
            return back();
          }

//end store


    function exist_user(){
      return view('Dashboard.user');
    }
    function add_user(Request $request){
      ExistUser::insert([
        'customer'=>$request->customer,
        'basic'=>$request->basic,
        'partner'=>$request->partner,
        'created_at'   =>Carbon::now()
      ]);
      return back();
    }


//begin payments
     function payments(){
       $categories = Category::all();
       $sub_categories = Subcategory::all();
       return view('Dashboard.payments.payments_form',compact('categories','sub_categories'));
     }

     function add_payments(Request $request){
       $payment=Payments::insertGetId([
         'seller_id'=>$request->seller_id,
         'buyer_id'=>$request->buyer_id,
         'title'=>$request->title,
         'card_name'=>$request->card_name,
         'card_number'=>$request->card_number,
         'store_name'=>$request->store_name,
         'store_location'=>$request->store_location,
         'phone'=>$request->phone,
         'price'=>$request->price,
         'discount'=>$request->discount,
         'discount_price'=>$request->discount_price,
         'created_at'   =>Carbon::now()
       ]);
       return back();
     }


     function view_payments(){
       $lists=Payments::all();
       return view('Dashboard.payments.view_payments_form',compact('lists'));
     }

     function payment_update(Request $request){

       $payment=Payments::findOrFail($request->id)->update([
         'name'=>$request->name,
         'card_name'=>$request->card_name,
         'card_number'=>$request->card_number,
         'store_name'=>$request->store_name,
         'store_location'=>$request->store_location,
         'price'=>$request->price,
         'phone'=>$request->phone,


       ]);

       return back();
     }

     function payment_edit($id){

         $list=Payments::findOrFail($id);
         return view('Dashboard.payments.single_payments_form',compact('list'));
       }

       function payment_delete($id){
           $list=Payments::findOrFail($id)->delete();
           return back();
         }
//end payments

//begin become merchant
        function become_merchant(Request $request){
          $request->validate([

           'name'          =>'required',
           'email'         =>'required',
           'subject'      =>'required',
           'message'      =>'required',

         ]);

          $merchant=Become_merchant::insertGetId([
            'name'=>$request->name,
            'email'=>$request->email,
            'subject'=>$request->subject,
            'message'=>$request->message,
            'created_at'   =>Carbon::now()
          ]);
          return back()->with('success','Data have successfully Added. We will contact you soon!');
        }


        function view_become_merchant(){
          $lists=Become_merchant::all();
          return view('Dashboard.become_merchant.become_merchant_list',compact('lists'));
        }

        function become_merchant_delete($id){
            $list=Become_merchant::findOrFail($id)->delete();
            return back();
          }
//end become merchant


//begin offer
        function offer_form(){
          return view('Dashboard.offers.offer_form');
        }

        function add_offer(Request $request){
          $request->validate([

           'store_name'          =>'required',
           'store_location'         =>'required',
           'discount'      =>'required',
           'photo'      =>'required',

         ]);

          $offers=Offers::insertGetId([
            'store_name'=>$request->store_name,
            'store_location'=>$request->store_location,
            'discount'=>$request->discount,
            'photo'=>$request->photo,
            'created_at'   =>Carbon::now()
          ]);

          if ($request->hasFile('photo')) {
              $photo_upload     =  $request ->photo;
              $photo_extension  =  $photo_upload -> getClientOriginalExtension();
              $photo_name       =  "i_need_offer_". $offers . "." . $photo_extension;
              Image::make($photo_upload)->resize(100,100)->save(base_path('public/uploads/offers/'.$photo_name),100);
              Offers::find($offers)->update([
              'photo'          => $photo_name,
                  ]);
                }
          return back()->with('success','Data have successfully Added.');
        }

        function view_offer_list(){
          $lists=Offers::all();
          $trashed_offers=Offers::onlyTrashed()->get();
          return view('Dashboard.offers.view_offer_list',compact('lists','trashed_offers'));
        }

        function offer_edit($id){

            $list=Offers::findOrFail($id);
            return view('Dashboard.offers.single_offer_list',compact('list'));
          }

        function offer_update(Request $request){

          $offers=Offers::findOrFail($request->id)->update([
            'store_name'=>$request->store_name,
            'store_location'=>$request->store_location,
            'discount'=>$request->discount,

          ]);
          if ($request->hasFile('photo')) {

              $photo_upload     =  $request ->photo;
              $photo_extension  =  $photo_upload -> getClientOriginalExtension();
              $photo_name       =  "i_need_offer_". $offers . "." . $photo_extension;
              Image::make($photo_upload)->resize(250,350)->save(base_path('public/uploads/offers/'.$photo_name),100);
              Offers::find($offers)->update([
              'photo'          => $photo_name,
                  ]);
                }

          return back();
        }

        function offer_delete($id){
            $list=Offers::findOrFail($id)->delete();
            return back();
          }

        function offer_restore($id){
            Offers::onlyTrashed()->findOrFail($id)->restore();
            return back();
          }
//end offer
}
