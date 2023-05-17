<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Controllers\Api\BaseController as BaseController;
use App\Models\User;
use App\Models\Payments;
use App\Models\Withdraw;
use App\Models\UserRegistration;
use Auth;
use DB;
use Image;
use Carbon\Carbon;

class ApiController extends BaseController
{
    //
    //sms api
    //       function send_sms($phone,$otp) {
    //       $url = "http://202.164.208.226/smsapi";
    //       $data = [
    //          "api_key" => "C20013386235902a575991.44900461",
    //          "type" => "text",
    //          "contacts" => "88" .$phone,
    //          "senderid" => "8809612442105",
    //          "msg" => "Your ineed verification code " .$otp,
    //       ];
    //       $ch = curl_init();
    //       curl_setopt($ch, CURLOPT_URL, $url);
    //       curl_setopt($ch, CURLOPT_POST, 1);
    //       curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
    //       curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    //       curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    //       $response = curl_exec($ch);
    //       curl_close($ch);
    //       return $response;
    //  }
                //             function send_sms($phone,$otp) {
                //   $url = "http://smsportal.codetreebd.com/smsapi";
                //   $data = [
                //     "api_key" => "C20012946262f8bd640038.20299120",
                //     "type" => "text",
                //     "contacts" => "88" .$phone,
                //     "senderid" => "8809612441954",
                //     "msg" => "Your ineed verification code " .$otp,
                //   ];
                //   $ch = curl_init();
                //   curl_setopt($ch, CURLOPT_URL, $url);
                //   curl_setopt($ch, CURLOPT_POST, 1);
                //   curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
                //   curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                //   curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
                //   $response = curl_exec($ch);
                //   curl_close($ch);
                //   return $response;
                // }
            //               public function send_sms($phone_number, $message)
            //   {
            //       $api_key = "887840126a1111f357a0e39e5bebd7ad331";
            //       $api_sec = "5fd65210b938ee3a8a13083f775160a6331";
            //       $user_name = "Ineed";

            //       $data = array(
            //           "auth" => [
            //               "username" => $user_name,
            //               "api_key" => $api_key,
            //               "api_secret" => $api_sec
            //           ],
            //           "sms_data" => [
            //               [
            //                   "recipient" => $phone_number,
            //                   "mask" => "Ineed",
            //                   "message" => urlencode($message)
            //               ]
            //           ]
            //       );

            //       $curl = curl_init();

            //       curl_setopt_array($curl, array(
            //       CURLOPT_URL => "http://masking.viatech.com.bd/smsnet/bulk/api",
            //       CURLOPT_RETURNTRANSFER => true,
            //       CURLOPT_ENCODING => "",
            //       CURLOPT_MAXREDIRS => 10,
            //       CURLOPT_TIMEOUT => 30,
            //       CURLOPT_SSL_VERIFYHOST => 0,
            //       CURLOPT_SSL_VERIFYPEER => 0,
            //       CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            //       CURLOPT_CUSTOMREQUEST => "POST",
            //       CURLOPT_POSTFIELDS => json_encode($data),
            //       CURLOPT_HTTPHEADER => array(
            //           "accept: application/json",
            //           "cache-control: no-cache",
            //           "content-type: application/json",
            //       ),
            //       ));

            //       $response = curl_exec($curl);
            //       $err = curl_error($curl);

            //       curl_close($curl);

            //       if ($err) {
            //       return  "cURL Error #:" . $err;
            //       } else {
            //       return $response;
            //       }
            //   }
            public function send_sms($phone_number, $message){
                                       // $msg=array();
                        $msg[]=array(
                        	  'recipient'  => "88" .$phone_number,
                        	  'mask'       => 'Ineed',
                        	  'message'    => "Your ineed verification code " .$message,
                        	);
                        
                        	
                        $auth = array(
                        	'username'    => 'ineed',
                        	'api_key'     => '887840126a1111f357a0e39e5bebd7ad331',
                        	'api_secret'  => '5fd65210b938ee3a8a13083f775160a6331',
                        	);
                        
                        $fields = array(
                          'auth'      => $auth,
                          'sms_data'  => $msg
                        );
                        
                        $headers = array
                        (
                          'Content-Type: application/json'
                        );
                        
                        
                        $ch = curl_init();
                        curl_setopt( $ch,CURLOPT_URL, 'http://masking.viatech.com.bd/smsnet/bulk/api' );
                        curl_setopt( $ch,CURLOPT_POST, true );
                        curl_setopt( $ch,CURLOPT_HTTPHEADER, $headers );
                        curl_setopt( $ch,CURLOPT_RETURNTRANSFER, true );
                        curl_setopt( $ch,CURLOPT_SSL_VERIFYPEER, false );
                        curl_setopt( $ch,CURLOPT_POSTFIELDS, json_encode($fields) );
                        $response = curl_exec($ch ); //this is json data
                        curl_close( $ch );
                        return $response;
                        //print_r($msg) ;
                        //print_r($response) ;
                        //$response = curl_exec($curl);
            }
     //end sms api
    
    
    // public function sendOtp(Request $request){

    //     $otp = rand(1000,9999);
    //     $send_otp=User::where('mobile','=',$request->mobile)->get()->pluck('mobile');
    //     if(!empty($send_otp)){
    //         $response=$this->send_sms($send_otp,$otp);
    //     }else{
    //         return $this->sendError([], 'Not Found Mobile Number Please contact Service Provider.');
    //     }
        
        
    //     $success = User::where('mobile','=',$request->mobile)->update(['otp' => $otp]);
        
    //     $mobile= User::where('mobile', $request->mobile)->get()->pluck('mobile');
    //     //$otp= User::where('mobile', $request->mobile)->get()->pluck('otp');
    //     if(empty($success)){
    //       return $this->sendError([], 'Not Found Mobile Number Please contact Service Provider.');
    //   }
    //         else{
    //     return $this->sendResponse(['mobile'=> $mobile], 'Otp send Successfully.');
    //             }
    // }
    
    public function sendOtp(Request $request){

        
                $otp = rand(1000,9999);
              $response=$this->send_sms($request->mobile,$otp);
              $success = User::where('mobile','=',$request->mobile)->update(['otp' => $otp]);

              $mobile= User::where('mobile', $request->mobile)->get()->pluck('mobile');
              //$otp= User::where('mobile', $request->mobile)->get()->pluck('otp');
              if(empty($success)){
                 return $this->sendError([], 'Not Found Mobile Number Please contact Service Provider.');
             }
                  else{
              return $this->sendResponse(['mobile'=> $mobile], 'Otp send Successfully.');
                      }
           }

   public function loginWithOtp(Request $request){

        $success  = User::where([['mobile','=',request('mobile')],['otp','=',request('otp')]])->first();
        if( !$success){
            return $this->sendError([], 'Otp Not Match.');
        }
        else{
            // $now = Carbon::now();
            
            // $current_month=$now->month;
            
            // UserRegistration::where('user_mobile','=',$request->mobile)
            //                   ->where('current_month','=',$current_month)
            //                   ->update(['status' => 'Approved']);
                              
            Auth::login($success, true);
            User::where('mobile','=',$request->mobile)->update(['otp' => null]);
            return $this->sendResponse([$success], 'login successfully.');
        }

    }

    //user membership Information
    public function api_list_user_membership($card_number){

      if(request('otpsend')){
          $mobile=UserRegistration::where('card_number', $card_number)->get()->pluck('user_mobile');
          //$otp=User::where('mobile', $mobile)->get()->pluck('otp');
          return $this->sendResponse(['mobile' => $mobile], 'otp send successfully.');
      }
      if(request('otpverify')){
        $success = UserRegistration::where('card_number', $card_number)->get();
        return $this->sendResponse($success, 'user membership information get successfully.');

      }
       return $this->sendError([], 'otp not match.');

    }


    //user profile Information
    public function api_list_user_profile($mobile){

      $success = User::where('mobile', $mobile)->get();
      return $this->sendResponse($success, 'user profile information get successfully.');

    }

    public function api_list_user_profile_membership($mobile){
        

      $success = UserRegistration::where('user_mobile', $mobile)->groupBy('card_number')->get();

      
      return $this->sendResponse($success, 'user profile information get successfully.');

    }
    
    public function api_list_user_profile_membership_card($card_number){
        
            
            // $now = Carbon::now();
            // $current_month=$now->month;
            // UserRegistration::where('card_number','=', $card_number)
            //                   ->where('current_month','=',$current_month)
            //                   ->update(['status' => 'Approved']);

      $success = UserRegistration::where('card_number', '=', $card_number)->get();
      if(!empty($success)){
           
           return $this->sendResponse($success, 'user profile card information get successfully.');
      
      }else{
        return $this->sendError([], 'Membership Card Not Found.');
      }

    }

    //payments table_post
      function add_payments(Request $request){
      if(request('otpsend')){
        $mobile=User::where('mobile', $request->buyer_phone_number)->get()->pluck('mobile');
        return $this->sendResponse(['mobile'=>$mobile], 'otp send successfully.');
      }

      if(request('otpverify')){
          
        $now = Carbon::now();

        $current_month=$now->month;
        UserRegistration::where('user_mobile','=',$request->buyer_phone_number)
                        ->where('card_number','=',$request->card_number)
                        ->where('current_month','=',$current_month)
                        ->update(['status' => 'Delivery' , 'store_name' => $request->store_name]);
                        
        $success=Payments::create([
          'seller_phone_number'=>$request->seller_phone_number,
          'buyer_phone_number'=>$request->buyer_phone_number,
          'title'=>$request->title,
          'card_name'=>$request->card_name,
          'card_number'=>$request->card_number,
          'store_name'=>$request->store_name,
          'store_location'=>$request->store_location,
          'price'=>$request->price,
          'discount'=>$request->discount,
          'discount_price'=>$request->discount_price,
          'date'=>$request->date,
          'role_id'=>$request->role_id,
          'customer_discount'=>$request->customer_discount,
          'ammount_after_discount'=>$request->ammount_after_discount,
          'ammount_before_discount'=>$request->ammount_before_discount,
          'less_discount'=>$request->less_discount,
          'less_ammount_discount'=>$request->less_ammount_discount,
          'created_at'   =>Carbon::now()
        ]);
        return $this->sendResponse($success, 'payments information post successfully.');

      }
        return $this->sendError([], 'otp not match.');
    }
//add partner merchant transaction    
    public function add_partner_payments(Request $request){
       $success=Payments::create([
          'seller_phone_number'=>$request->seller_phone_number,
          'buyer_phone_number'=>$request->buyer_phone_number,
          'title'=>$request->title,
          'card_name'=>$request->card_name,
          'card_number'=>$request->card_number,
          'store_name'=>$request->store_name,
          'store_location'=>$request->store_location,
          'price'=>$request->price,
          'discount'=>$request->discount,
          'discount_price'=>$request->discount_price,
          'date'=>$request->date,
          'role_id'=>$request->role_id,
          'customer_discount'=>$request->customer_discount,
          'ammount_after_discount'=>$request->ammount_after_discount,
          'ammount_before_discount'=>$request->ammount_before_discount,
          'less_discount'=>$request->less_discount,
          'less_ammount_discount'=>$request->less_ammount_discount,
          'created_at'   =>Carbon::now()
        ]);
        return $this->sendResponse($success, 'partner merchant payments information post successfully.');
    }
    
    //payments table_get
    public function get_seller_payments($seller_phone_number){

      $success = Payments::where('seller_phone_number', $seller_phone_number)->get();
      return $this->sendResponse($success, 'Merchant transaction information get successfully.');

    }

    public function get_buyer_payments($buyer_phone_number){

      $success = Payments::where('buyer_phone_number', '=', $buyer_phone_number)->where('role_id', '=', 3)->get();
      return $this->sendResponse($success, 'User transaction information get successfully.');

    }
    
    
        //user membership update

    public function user_membership_update(Request $request, $card_number){

      $success=UserRegistration::where('id',$card_number)->update([

        'status'=>$request->status,

        'store_name'=>$request->store_name,

      ]);
     return $this->sendResponse($success, 'Updated successfully.');


        }
        
        
        
        //marchent store
          public function marchent_store($role_id){

          $success=User::select('shop_name','shop_address','mobile','discount','shop_photo','shop_details')->where('role_id', $role_id)->get();

          return $this->sendResponse($success, 'Merchant Store information get successfully.');
        }
        
        
        //shop search 
          function shop_search_grocery($name, $name2){
    // Get the search value from the request
        //   $shop_address = $request->input('shop_address');
        
         
        // $search = $request->input('shop_address');
        // $search1 = $request->input('shop_name');
  
        // $success = User::query()->where('role_id', '=', 2)
        //             ->where('shop_address', 'LIKE', "%{$search}%")
        //             ->orWhere('shop_name', 'LIKE', "%{$search1}%")
        //             ->get();
        // Search in the title and body columns from the posts table
            //  $success = User::where('shop_address', '=', $request->shop_address)->where('role_id', '=', 2)->get();
            
            $result = User::where('shop_address', 'LIKE', '%'. $name. '%')->where('shop_name', 'LIKE', '%'. $name2. '%')->where('role_id', '=', 2)->get();
        if(count($result)){
         return Response()->json($result);
        }
        else
            {
            return response()->json(['Result' => 'No Data not found'], 404);
          }


       if(empty($request)){
           return $this->sendError([], 'no data found.');
       }
       else{
           return $this->sendResponse($success, ' Store information get successfully.');
       }
    }
    
//transaction summery 
    
    public function transaction_summery($mobile){
          
        $success = Payments::select('card_number','price','discount','date','discount_price','created_at')
                        ->where('seller_phone_number', $mobile)
                        ->get();
  
            
            return $this->sendResponse($success, 'transaction summery get successfully.');
    }
    
    public function transaction_summery2($mobile, $card){
          
        $success = Payments::select('card_number','price','discount','date','discount_price','created_at')
                        ->where('seller_phone_number', $mobile)->where('card_number', '=', $card)
                        ->get();
  
            
            return $this->sendResponse($success, 'transaction summery get successfully.');
    }
    
    //transaction search 
    
    public function transaction_search(Request $request){
           $startDate = $request->input('date');
           $endDate = $request->input('date');
  
        $success = Payments::select('seller_phone_number','buyer_phone_number','card_name','card_number','store_name','store_location','price','discount','date','discount_price','created_at')
                        ->whereDate('date', '>=', $startDate)
                        ->whereDate('date', '<=', $endDate)
                        ->get();
  
            
            return $this->sendResponse($success, 'transaction information get successfully.');
    }
    

//transaction week    
    public function transaction_graph($mobile)
    {
        
    //     $success = Payments::select('created_at','discount_price')->where('seller_phone_number','=', $mobile)
    // ->get()
    // ->groupBy(function($date) {
    //     //return Carbon::parse($date->created_at)->format('Y'); // grouping by years
    //     return Carbon::parse($date->created_at)->format('m'); // grouping by months
    // });
    
    $success = Payments::orderBy('created_at')->where('seller_phone_number','=', $mobile)->get()->groupBy(function($item) {
        
     return $item->created_at->format('Y-m-d');
        
    });
        // $success = Payments::select('created_at','discount_price')->where('seller_phone_number','=', $mobile)
        //         ->whereBetween('created_at', 
        //                 [Carbon::now()->startOfWeek(), Carbon::now()->endOfWeek()]
        //             )->groupBy(function($date) {
        //  return Carbon::parse($date->created_at)->format('Y') // grouping by years
        //         ->get();
        //             });
                
                
         
        return $this->sendResponse($success ,  'graph data Sales get successfully.');
        
         
     
    }
    
//transaction Last 15 days   
    public function transaction_15days($mobile)
    {
       $success = Payments::orderBy('created_at')->where('seller_phone_number','=', $mobile)->where('created_at','>=',Carbon::now()->subdays(15))->get()
               ->groupBy(function($item) {
        
                  return $item->created_at->format('Y-m-d');
           
                 });
        
        return $this->sendResponse($success, 'Last 15 days Sales get successfully.');
    }

//transaction today    
    public function transaction_today($mobile)
    {
        
          $success = Payments::orderBy('created_at')->where('seller_phone_number','=', $mobile)->whereDate('created_at', Carbon::today())->get()
               ->groupBy(function($item) {
        
                  return $item->created_at->format('Y-m-d');
           
                 });
        return $this->sendResponse($success, 'today Sales get successfully.');
    }

//transaction month    
    public function transaction_month($mobile)
    {
        
         $success = Payments::orderBy('created_at')->where('seller_phone_number','=', $mobile)->whereMonth('created_at', date('m'))
        ->whereYear('created_at', date('Y'))->get()
               ->groupBy(function($item) {
        
                  return $item->created_at->format('Y-m-d');
           
                 });
        return $this->sendResponse($success, '1 month Sales get successfully.');
    }
    
//transaction year    
    public function transaction_year($mobile)
    {
        
                $success = Payments::orderBy('created_at')->where('seller_phone_number','=', $mobile)
                ->whereBetween('created_at', [Carbon::now()->startOfYear(),Carbon::now()->endOfYear(),])->get()
               ->groupBy(function($item) {
        
                  return $item->created_at->format('Y-m-d');
           
                 });                      
        return $this->sendResponse($success, 'current year Sales get successfully.');
    }
    
//sum
        
    public function merchant_transaction_sales($mobile){
        
        $success=Payments::where('seller_phone_number', '=', $mobile)->sum('price');
        
        //$success=Payments::where('seller_phone_number', $mobile)->count();
        return $this->sendResponse($success, 'Total Sales get successfully.');
    }
    
    
//withdraw ammount
      public function withdraw(Request $request){
         $success=Withdraw::insertGetId([
          'user_mobile'=>$request->user_mobile,
          'payment_method'=>$request->payment_method,
          'description'=>$request->description,
          'note'=>$request->note,
          'withdraw_photo'=>$request->withdraw_photo,
          'withdraw_ammount'=>$request->withdraw_ammount,
          'status'=>'Under Review',
          'created_at'   =>Carbon::now()
        ]);
        if ($request->hasFile('withdraw_photo')) {
            $photo_upload     =  $request ->withdraw_photo;
            $photo_extension  =  $photo_upload -> getClientOriginalExtension();
            $photo_name       =  "i_need_withdraw_photo". $success . "." . $photo_extension;
            Image::make($photo_upload)->resize(100,100)->save(base_path('public/uploads/withdraws/'.$photo_name),100);
            Withdraw::find($success)->update([
            'withdraw_photo'          => $photo_name,
                ]);
              }
        return $this->sendResponse([$success], 'Withdraw successfully.');
      }
      
//withdraw get
    public function withdraw_get($mobile){

      $success=Withdraw::where('user_mobile', '=', $mobile)->get();
      return $this->sendResponse($success, 'Withdraw data get successfully.');
    }      
//withdraw sum
        public function withdraw_sum($mobile){

          $success=Withdraw::where('user_mobile', '=', $mobile)->where('status', '=', 'Complete')->sum('withdraw_ammount');;
          return $this->sendResponse([$success], 'Total Withdraw ammount successfully.');
        }      

//withdraw ammount Update
      public function withdraw_update(Request $request, $id){

                      $success=Withdraw::where('id','=',$id)
                      ->update(['status' => 'Complete' , 'withdraw_photo' => $request->withdraw_photo, 'note'=> $request->note]);
                      if ($request->hasFile('withdraw_photo')) {
                          $photo_upload     =  $request ->withdraw_photo;
                          $photo_extension  =  $photo_upload -> getClientOriginalExtension();
                          $photo_name       =  "i_need_withdraw_photo". $id . "." . $photo_extension;
                          Image::make($photo_upload)->resize(100,100)->save(base_path('public/uploads/withdraws/'.$photo_name),100);
                          Withdraw::find($id)->update([
                          'withdraw_photo'          => $photo_name,
                              ]);
                            }
              return $this->sendResponse($success, 'Withdraw completed successfully.');              

    }
        

        
}
