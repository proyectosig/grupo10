<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cuenta_Empresa extends Model
{
    protected $fillable = [
    	'id_empresa',
    	'id_cuenta',
    	
    ];
    public function empresa()
    {
    	return $this->belongsTo('App\empresa');
    }
    public function cuenta()
    {
    	return $this->belongsTo('App\cuenta');
    }
}
