<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use SoftDeletes;
    protected $dates = ['deleted_at'];
    protected $fillable = ['product_name','product_description', 'product_category','product_price','product_stock','product_quantity'];


    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    
}