<?php

namespace Soft;

use Illuminate\Database\Eloquent\Model;

class Cronica extends Model
{
    protected $fillable = [
        	'id',
            'descripcion',
    ];


     public function conexion()
    {
        //una cronica puede tener una conexion
        return $this->belongsTo(web_conexion::class);
    }
}
