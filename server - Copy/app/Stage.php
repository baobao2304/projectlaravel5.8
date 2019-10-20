<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Stage extends Model
{
   
    protected $primaryKey = 'ids';
    protected $fillable = [
       'ids','idfruit','idstage','tenstage', 'namestage','mota'
    ];
    // public $timestamps = false;2
    protected $table='stage';
    // protected $timestamps = false;
}
