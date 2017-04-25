<?php

namespace Soft;

use Illuminate\Database\Eloquent\Model;

class web_voto extends Model
{
    protected $fillable = [
        	  'id',
            'nombre',
            'link',
    ];
}
