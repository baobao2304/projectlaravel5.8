<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Admin extends Authenticatable
{
    use Notifiable;
    const ADMIN_TYPE = 0;
    // protected $guard = 'admin';
    protected $table = 'admins';
    protected $fillable = [
        'name', 'email', 'addadmin','password' 
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];
    // protected $casts = [
    //     'email_verified_at' => 'datetime',
    // ];
}