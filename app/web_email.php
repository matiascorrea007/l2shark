<?php

namespace Soft;

use Illuminate\Database\Eloquent\Model;

class web_email extends Model
{
     protected $fillable = [
        	'id', 
			'email',
			'password', 
			'nombre',    
    ];
}
