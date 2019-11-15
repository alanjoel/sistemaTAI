<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class telefono extends Model
{
    protected $fillable=[
    	'idTelefono','numero','idCliente',
    ];
    public $timestamps=false;
}
