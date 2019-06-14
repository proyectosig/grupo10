<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class cuenta extends Model
{
    	
    protected $fillable = [
    	
    	'id_cuenta',
    	
    ];

    public function credito()
    {
    	return $this->hasMany('App\credito');
    }
    public function ahorro()
    {
    	return $this->hasMany('App\ahorro');
    }
    public function cuenta_empresa()
    {
    	return $this->hasMany('App\cuenta_empresa');
    }
    public function cuenta_socio()
    {
    	return $this->hasMany('App\cuenta_socio');
    }
}
