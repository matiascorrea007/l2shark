<?php

namespace Soft;

use Illuminate\Database\Eloquent\Model;

class web_imagene extends Model
{
    protected $fillable = [
        	'id',
            'titulo',
            'url',
            'imagen',
            'user_id',
              'visible',
    ];
}
