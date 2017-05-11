<?php

namespace Soft;

use Illuminate\Database\Eloquent\Model;

class web_post extends Model
{
   protected $fillable = [
        	'id',
          'portada',
          'imagen',
        	'titulo',
          'descripcioncorta',
          'descripcionlarga',
          'user_id',
            
    ];

public function user()
    {
        //un post tiene un user
       return $this->belongsTo(User::class);
    } 
}
