<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SystemClassificationProduct extends Model
{
    protected $fillable = [
        'province','branchadress','sdt'
   ];
   // public $timestamps = false;
   protected $table='systemclassificationproduct';
}
