<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fruit extends Model
{
    protected $primaryKey = 'idfruit';
    protected $keyType = 'char';
    public $incrementing = false; 
    protected $fillable = [
        'idfruit','tenfruit', 'namefruit'
    ];
    protected $table='fruit';
}