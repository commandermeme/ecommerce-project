<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
        'email', 'total_price', 'currency', 'payment_method',
    ];
}
