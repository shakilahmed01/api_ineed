<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Discount_store extends Model
{
  use HasFactory;
    use SoftDeletes;
    protected $fillable = [
        'store_name',
        'store_location',
        'phone',
        'price',
        'photo',
    ];
}
