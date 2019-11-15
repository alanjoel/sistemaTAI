<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class venta extends Model
{
    protected $fillable=[
    	'idVenta','fecha','descuento','cantidad','montoTotal','rutCliente','idProducto',
    ];
    public $timestamps=false;
}
