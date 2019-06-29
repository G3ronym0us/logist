<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TipoMovimiento extends Model
{
    protected $table='tipo_movimiento';

    protected $primaryKey='id';

    public $timestamp=false;

    protected $fillable = [
    	'codigo',
    	'concepto',
    	'estado'
    ]
}
