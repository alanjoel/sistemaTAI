<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class proveedor extends Model
{
    protected $fillable=[
    	'idProveedor','nombre','direccion','telefono','paginaWeb',
    ];
    public $timestamps=false;
}
