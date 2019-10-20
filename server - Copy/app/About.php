<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    protected $fillable = [
        'id','image'
    ];
  
    protected $table='about';
    // protected $timestamps = false;
}
