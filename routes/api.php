<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ApiController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

//send otp
Route::post('sendOtp', [ApiController::class, 'sendOtp']);
Route::post('checkapi/{phone_number}/{message}', [ApiController::class, 'send_sms']);

//login with otp
Route::post('loginWithOtp', [ApiController::class,'loginWithOtp'])->name('loginWithOtp');

//card information get with card number
Route::get('membership/info/{card_number}',[ApiController::class, 'api_list_user_membership'])->middleware('Otpverify');

//add grocery transaction
Route::post('/add/user/payments',[ApiController::class, 'add_payments'])->name('add_payments')->middleware('StatusUpdate');

//add partner merchant transaction
Route::post('/add/user/payments/partner_merchant',[ApiController::class, 'add_partner_payments'])->name('add_partner_payments');

//user profile 
Route::get('user/profile/info/{mobile}',[ApiController::class, 'api_list_user_profile']);

//user profile membership get with mobile number
Route::get('user/profile/membership/{mobile}',[ApiController::class, 'api_list_user_profile_membership']);

//user profile membership get with card number
Route::get('user/profile/membership/card/{card_number}',[ApiController::class, 'api_list_user_profile_membership_card']);

//merchant payment
Route::get('/get/merchant/payments/{seller_phone_number}',[ApiController::class, 'get_seller_payments']);

//user payment
Route::get('/get/user/payments/{buyer_phone_number}',[ApiController::class, 'get_buyer_payments']);


//marchent update user 
Route::post('/user/membership/update/{card_number}',[ApiController::class, 'user_membership_update']);

//marchent store details
Route::get('/marchent/store/details/{role_id}',[ApiController::class, 'marchent_store']);

//store search 
Route::get('/marchent/store/search/grocery/{name}/{name2}',[ApiController::class, 'shop_search_grocery']);

//transaction summery 
Route::get('/transaction/summery/{mobile}',[ApiController::class, 'transaction_summery']);
Route::get('/transaction/summery/2/{mobile}/{card}',[ApiController::class, 'transaction_summery2']);

//transaction search 
Route::get('/transaction/search',[ApiController::class, 'transaction_search']);

//total sales ammount count 
Route::get('/transaction/sales/{mobile}',[ApiController::class, 'merchant_transaction_sales']);

//graph data transaction 
Route::get('/transaction/sales/graph/yes/{mobile}',[ApiController::class, 'transaction_graph']);

//today data transaction 
Route::get('/transaction/sales/today/yes/{mobile}',[ApiController::class, 'transaction_today']);

//current month data transaction 
Route::get('/transaction/sales/month/yes/{mobile}',[ApiController::class, 'transaction_month']);

//current year data transaction 
Route::get('/transaction/sales/year/yes/{mobile}',[ApiController::class, 'transaction_year']);

//last 15 days data transaction 
Route::get('/transaction/sales/15days/yes/{mobile}',[ApiController::class, 'transaction_15days']);

//withdraw payments
Route::post('/withdraw',[ApiController::class, 'withdraw']);

//withdraw payments
Route::get('/withdraw/get/{mobile}',[ApiController::class, 'withdraw_get']);

//withdraw sum
Route::get('/withdraw/sum/{mobile}',[ApiController::class, 'withdraw_sum']);

//withdraw payments update
Route::post('/withdraw/update/{id}',[ApiController::class, 'withdraw_update']);