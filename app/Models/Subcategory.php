<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subcategory extends Model
{
    use HasFactory;
    protected $fillable = [
        'subcategory_card_number', 'category_id',
    ];

    function relationBetweenCategory()
    {

    return $this->hasOne('App\Models\Category','id','category_id');
    }
}
