<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Hash;

class SuperAdmin extends Authenticatable 
{
    use Notifiable;

    protected $fillable = ['email','password','role'];
    protected $hidden = ['password','remember_token'];


    // public function setPasswordAttribute($value){
    //     $this->attributes['password'] =Hash::make($value);
    // }
}
