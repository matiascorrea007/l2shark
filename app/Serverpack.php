<?php

namespace Soft;

use Illuminate\Database\Eloquent\Model;

class Serverpack extends Model
{
    protected $fillable = [
        	'id',
            'descripcion',
    ];

     public function conexion()
    {
        //una serverpack puede tener una conexion
        return $this->belongsTo(web_conexion::class);
    }
}
