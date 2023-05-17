<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payments extends Model
{
    use HasFactory;
    protected $fillable = [
      'seller_phone_number',
      'buyer_phone_number',
      'title',
      'card_name',
      'card_number',
      'store_name',
      'store_location',
      'price',
      'discount',
      'discount_price',
      'date',
      'role_id',
      'customer_discount',
      'ammount_after_discount',
      'ammount_before_discount',
      'less_discount',
      'less_ammount_discount',

    ];

    function relationBetweenUser()
    {

    return $this->hasOne('App\Models\User','id','name');
    }

    function relationBetweenCategory()
    {

    return $this->hasOne('App\Models\Category','id','card_name');
    }
    function relationBetweenSubCategory()
    {
    return $this->hasOne('App\Models\SubCategory','id','card_number');
    }


}
