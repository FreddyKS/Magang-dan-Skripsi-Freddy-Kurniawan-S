<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cart2 extends Model
{
    //
    public $table = "cart2";
    protected $fillable = ['id','transaction_id','cart_name','cart_quantity','cart_price'];
}
