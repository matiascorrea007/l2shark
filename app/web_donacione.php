<?php

namespace Soft;

use Illuminate\Database\Eloquent\Model;

class web_donacione extends Model
{
    protected $fillable = [
        	'id',   
        	'coin',
        	'account',
        	'total',
        	'metodo',
        	'status',
    ];
}
