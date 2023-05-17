<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class UserRegistration extends Model
{
  use HasFactory;
    use SoftDeletes;
    protected $fillable = [
        'user_id',
        'user_mobile',
        'email',
        'card_name',
        'card_number',
        'card_ammount',
        'limit',
        'expire_date',
        'status',
        'store_name',
        'address',
        'photo',

    ];
    function relationBetweenUser_mobile()
    {

    return $this->hasOne('App\Models\User','mobile','user_mobile');
    }

    function relationBetweenUser_id()
    {

    return $this->hasOne('App\Models\User','id','user_mobile');
    }

    function relationBetweenCategory()
    {

    return $this->hasOne('App\Models\Category','category_name','card_name');
    }
    function relationBetweenSubCategory()
    {
    return $this->hasOne('App\Models\Subcategory','subcategory_card_number','card_number');
    }
}
