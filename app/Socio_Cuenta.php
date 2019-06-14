<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Socio_Cuenta extends Model
{
    protected $fillable = [
    	
    	'id_cuenta',
    	'id_socio',
    	
    ];
    public function socio()
    {
    	return $this->hasMany('App\socio');
    }
}
