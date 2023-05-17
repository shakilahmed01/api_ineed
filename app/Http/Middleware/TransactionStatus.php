<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Models\UserRegistration;
use App\Models\User;
use Auth;
class TransactionStatus
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
      //  dd ($request->card_number);
        $mobile=User::where('mobile', $request->buyer_phone_number)->get()->pluck('mobile');
         //dd ($mobile);
        $user = User::where('mobile', $mobile)->first();
         if (!empty($user)&& empty (request('otp'))) {
           $otp = rand(1000,9999);
           $code =$user->update(['otp' => $otp]);
          $request->merge(['otpsend'=>true]);
         }

         $success  = User::where([['mobile','=',request('mobile')],['otp','=',request('otp')]])->first();
           
         if( $success){
             //Auth::login($success, true);
             $user->update(['otp' => null]);
             $request->merge(['otpverify'=>true]);
             //return $this->sendResponse($success, 'login successfully.');
         }

             return $next($request);
    }
}
