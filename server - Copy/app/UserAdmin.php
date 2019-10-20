<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
class UserAdmin extends Model
{

    protected $fillable = [
        'userid','pass', 'mail' , 'addadmin'
    ];
  
    protected $table='useradmin';
    // protected $fillable = [
        // 'name', 'email', 'addadmin','password' 
        // 'userid','pass', 'mail' , 'addadmin'
    // ];
  
    // protected $table='admins';
    // protected $timestamps = false;
}
