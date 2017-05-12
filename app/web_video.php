<?php

namespace Soft;

use Illuminate\Database\Eloquent\Model;

class web_video extends Model
{
    protected $fillable = [
        	  'id',
            'titulo',
            'link',
            'imagen',
            'filename',
            'user_id',
            'visible',
    ];
}
