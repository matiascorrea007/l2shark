<?php

namespace Soft;

use Illuminate\Database\Eloquent\Model;

class web_pagina extends Model
{
    protected $fillable = [
        	'id',
        	'descargas',
        	'reglas',
        	'donaciones',
        	'soporte',
        	'informacion',
            
    ];
}
