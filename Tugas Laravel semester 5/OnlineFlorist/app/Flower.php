<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Flower extends Model
{
    protected $primaryKey = 'flower_id';
    public $table = "flower";
    //
    protected $fillable = ['flower_id', 'flower_name','flower_description','flower_price','flower_type','flower_stock','flower_image'];
}
