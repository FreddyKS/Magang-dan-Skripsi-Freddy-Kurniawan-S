<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Stack extends Model
{
    //
    public $table = 'stack_table';
    protected $fillable = [
        'id','data',
    ];
}
