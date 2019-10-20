<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Legislation extends Model
{
    protected $fillable = [
        'id','image','type'
    ];
  
    protected $table='legislation';
    // protected $timestamps = false;
}
