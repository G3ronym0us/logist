<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Salida extends Model
{
    protected $table='salidas';

    protected $primaryKey='id';

    public $timestamp=false;

    protected $fillable = [
    	'cantidad',
    	'valor_total',
    	'estado'
    ];

    public function movimiento()
    {
        return $this->belongsTo('App\Movimiento');
    }
}
