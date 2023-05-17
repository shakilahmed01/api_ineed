<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Carbon\Carbon;
use Image;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Redirect;
use Validator;

class UserController extends Controller
{

  use RegistersUsers;


    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    public $successStatus = 200;

    public function login_new(Request $request){
        Log::info($request);
        if(Auth::attempt(['mobile' => request('mobile'), 'password' => request('password')])){
          // return Redirect::index();
          return Redirect::HOME();
        }
        else{
            return Redirect::back ();
        }
    }

    public function loginWithOtp(Request $request){
        Log::info($request);
        $user  = User::where([['mobile','=',request('mobile')],['otp','=',request('otp')]])->first();
        if( $user){
            Auth::login($user, true);
            User::where('mobile','=',$request->mobile)->update(['otp' => null]);
            return Redirect::HOME();
        }
        else{
            return Redirect::back ();
        }
    }

    public function register(Request $request)
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
                        'role_id'=>$request->role_id,
                        'password'=>Hash::make($request['password']),

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


        return redirect('loginWithOtp');
    }

    public function sendOtp(Request $request){

        $otp = rand(1000,9999);
        Log::info("otp = ".$otp);
        $user = User::where('mobile','=',$request->mobile)->update(['otp' => $otp]);
        // send otp to mobile no using sms api
        return response()->json([$user],200);
    }

    function indexotp(){
      return view('auth.OtpLogin');
    }
}
