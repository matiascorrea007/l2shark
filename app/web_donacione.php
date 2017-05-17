<?php

namespace Soft;

use Illuminate\Database\Eloquent\Model;

class web_donacione extends Model
{
    protected $fillable = [
        	'id',   
        	'coin',
        	'bonus',
        	'account',
        	'total',
        	'metodo',
        	'status',
    ];
}
