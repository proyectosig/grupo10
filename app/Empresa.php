<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Empresa extends Model
{
    protected $fillable = [
    	'id_empresa',
    	'nombre',
    	'giro',
    	
    ];

    public function empresa_cuenta()
    {
    	return $this->belongsTo('App\empresa_cuenta');
    }

}
