<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Catalogo extends Model
{
    protected $table='catalogo';

    protected $primaryKey='id';

    public $timestamp=false;

    protected $fillable = [
    	'codigo',
    	'denominacion',
    	'cantidad',
    	'valor_unitario',
    	'unidad_medida',
    	'estado'
    ]
}
