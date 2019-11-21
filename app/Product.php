<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'title', 'price', 'description', 'notetocustomer',
    ];

    public function user() {
        return $this->belongsTo('App\User');
    }
}
