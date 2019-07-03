<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tipo extends Model
{
    protected $fillable = [
    	'id_tipo',
    	'id_credito',
    	'nombre',
    	
    ];
    public function credito()
    {
    	return $this->belongsTo('App\credito');
    }
}
