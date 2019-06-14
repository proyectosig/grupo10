<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Socio extends Model
{
    protected $fillable = [
    	'id_socio',
    	'nombre',
    	'tipo_socio',
    	'fechafinal',
    	'cargo',
    	
    ];

    public function socio_cuenta()
    {
    	return $this->hasMany('App\socio_cuenta');
    }
}
