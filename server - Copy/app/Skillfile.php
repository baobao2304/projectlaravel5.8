<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Skillfile extends Model
{
    protected $primaryKey = 'id';

    protected $fillable = [
        'id', 'image'
    ];
  
    protected $table='skillfile';
    // protected $timestamps = false;
}
