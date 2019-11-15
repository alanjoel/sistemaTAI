<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class producto extends Model
{
    protected $fillable=[
    	'idProducto','nombre','precioActual','stock','idCategoria','idProveedor',
    ];
    public $timestamps=false;

    public function categorias()
    {
    	return $this->hasMany('App\categoria','idCategoria');
    }
    public function proveedores()
    {
    	return $this->hasMany('App\proveedor','idProveedor');
    }
}
