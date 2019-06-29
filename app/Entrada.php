<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Entrada extends Model
{
    protected $table='entradas';

    protected $primaryKey='id';

    public $timestamp=false;

    protected $fillable = [
    	'cantidad',
    	'valor_total',
    	'estado'
    ]
}
