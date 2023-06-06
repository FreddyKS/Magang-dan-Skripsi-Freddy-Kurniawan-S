<?php

namespace App;

use Illuminate\Foundation\Auth\Guest as A;
use Illuminate\Database\Eloquent\Model;
//use Illuminate\Contracts\Auth\Authenticatable as B;

//class Guest extends Model
class Guest extends A
{
    public $table = "guest";
    protected $guarded =['id'];
    protected $fillable  = ['email','name','phone_number','gender','address','image'];
    protected   $hidden = ['password','remember_token'];
    public function getAuthPassword()
    {
     return $this->password;
    }
}
