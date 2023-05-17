<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Models\UserRegistration;
use App\Models\User;
use Auth;
class OtpVerification
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
     
               function send_sms($phone,$otp) {
                  $url = "http://smsportal.codetreebd.com/smsapi";
                  $data = [
                    "api_key" => "C20012946262f8bd640038.20299120",
                    "type" => "text",
                    "contacts" => "88" .$phone,
                    "senderid" => "8809612441954",
                    "msg" => "Your ineed verification code " .$otp,
                  ];
                  $ch = curl_init();
                  curl_setopt($ch, CURLOPT_URL, $url);
                  curl_setopt($ch, CURLOPT_POST, 1);
                  curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
                  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                  curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
                  $response = curl_exec($ch);
                  curl_close($ch);
                  return $response;
                }
     
    public function handle(Request $request, Closure $next)
    {
        
        
    //  dd ($request->card_number);
      $mobile=UserRegistration::where('card_number', $request->card_number)->get()->pluck('user_mobile');
       //dd ($mobile);
      $user = User::where('mobile', $mobile)->first();
       if (!empty($user)&& empty (request('otp'))) {
         $otp = rand(1000,9999);
         $response=$this->send_sms($mobile,$otp);
         $code =$user->update(['otp' => $otp]);
         $request->merge(['otpsend'=>true]);
       }
       

       $success  = User::where([['mobile','=',request('mobile')],['otp','=',request('otp')]])->first();
       if( $success){
           $user->update(['otp' => null]);
           $request->merge(['otpverify'=>true]);
       }

           return $next($request);

    }
}
