<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    //
    public $table = "cart";
    protected $fillable = ['id','transaction_id','flower_id','cart_name','cart_quantity','cart_price'];
}
