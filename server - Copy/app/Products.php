<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    protected $primaryKey = 'idproduct';
    protected $keyType = 'char';
    public $incrementing = false; 
    protected $fillable = [
        'idproduct', 'tenproduct', 'nameproduct','pathproduct1','pathproduct2','pathproduct3','pathproduct4','pathproduct5','pathproduct6','pathproduct7'
    ];
    
    protected $table='product';
    // protected $timestamps = false;
}
