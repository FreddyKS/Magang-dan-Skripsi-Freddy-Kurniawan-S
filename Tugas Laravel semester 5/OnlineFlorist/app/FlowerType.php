<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FlowerType extends Model
{
    public $table = "flower_types";
    protected $fillable = ['id','flower_type'];
    //
}
