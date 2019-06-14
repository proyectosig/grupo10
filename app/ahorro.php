<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ahorro extends Model
{
    //
    protected $fillable = [
    	'id_ahorro',
    	'id_cuenta',
    	'tipo_ahorro',
    	'tasa_interes',
    	
    ];

    public funcion  cuenta()
    {
    	return $this->belongsToMany('App\cuenta');
    }
}
