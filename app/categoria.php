<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class categoria extends Model
{
    protected $fillable=[
    	'idCategoria','nombre','descripcion',
    ];
    public $timestamps=false;
}