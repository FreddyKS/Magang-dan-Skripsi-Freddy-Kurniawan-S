<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TransactionHistory extends Model
{
    //
    public $table = "transaction_history";
    protected $fillable = ['id','transaction_date','member_name','courier','total_price'];
}
