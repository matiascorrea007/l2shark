<?php

namespace Soft;

use Illuminate\Database\Eloquent\Model;

class web_donaciones_transferencia extends Model
{
            protected $fillable = [
        	'id',   
        	'cantidad',
        	'pj',
        	'email',
    ];
}
