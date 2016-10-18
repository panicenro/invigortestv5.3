<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    protected $fillable = [
    	'product_picture',
    	'product_name',
    	'product_price',
    	'product_description',
    ];

    public function scopeList($query)
    {

    }
}
