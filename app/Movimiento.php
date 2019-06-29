<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movimiento extends Model
{
    protected $table='movimientos';

    protected $primaryKey='id';

    public $timestamp=false;

    protected $fillable = [
    	'municipio',
    	'num_partida',
    	'proyecto',
    	'beneficiario',
    	'orden_compra',
    	'estado'
    ];

    public function salida()
    {
        return $this->hasMany('App\Salida');
    }
}
