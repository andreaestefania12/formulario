<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    //
    protected $table =  'users';
    protected $fillable = ['name','lastname','age','email','password'];
    
}
