<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class cliente extends Model
{
    protected $fillable=[
    	'idCliente','nombre','calle','numero','ciudad','comuna',
    ];
    public $timestamps=false;
}
