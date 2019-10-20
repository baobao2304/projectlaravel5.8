<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KhachHang extends Model
{
    protected $primaryKey = 'id';
    // protected $keyType = 'char';
    // public $incrementing = false; 
    protected $fillable = [
       'id','tenuser','pass', 'numberphone', 'mail', 'addadmin'
    ];
    protected $table='khachhang';

}
