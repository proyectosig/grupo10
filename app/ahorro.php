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
    	'monto',
        'tasa',
    	
    ];

    public funcion  cuenta()
    {
    	return $this->belongsToMany('App\cuenta');
    }
}
