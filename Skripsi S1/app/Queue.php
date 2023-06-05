<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Queue extends Model
{
    //
    public $table = 'queue_table';
    protected $fillable = [
        'id','data',
    ];
}
