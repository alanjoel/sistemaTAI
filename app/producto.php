<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class producto extends Model
{
    protected $fillable=[
    	'idProducto','nombre','precioActual','stock','idCategoria','idProveedor',
    ];
    public $timestamps=false;
}
