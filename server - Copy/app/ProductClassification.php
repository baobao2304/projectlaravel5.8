<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductClassification extends Model
{
    protected $primaryKey = 'id';
    // protected $keyType = 'char';
    // public $incrementing = false; 
    protected $fillable = [
        'id','idfruit', 'idstage', 'idproduct'
    ];
   
    protected $table='productclassification';
    // protected $timestamps = false;
}
