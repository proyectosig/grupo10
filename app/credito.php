<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class credito extends Model
{
    protected $fillable = [
    	'id_credito',
    	'id_cuenta',
    	'fechainicio',
    	'fechafinal',
    	'monto',
    	'interes',
    	'estado',
    	'periodo',
    	'saldo',
        'transaccion',
        'deuda',
    ];

    public function cuenta()
    {
    	return $this->belongsToMany('App/cuenta');
    }
    public function tipo()
    {
    	return $this->hasMany('App/tipo');
    }
}
