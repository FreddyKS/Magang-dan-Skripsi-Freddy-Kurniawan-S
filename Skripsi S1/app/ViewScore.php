<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ViewScore extends Model
{
    //
    public $table = 'view_score';
    protected $fillable = [
        'id','email','category','score',
    ];
}
