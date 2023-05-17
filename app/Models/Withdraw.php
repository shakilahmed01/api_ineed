<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Withdraw extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_mobile',
        'description',
        'note',
        'payment_method',
        'withdraw_ammount',
        'withdraw_photo',
        'approval_date',
        'status',
    ];
}
