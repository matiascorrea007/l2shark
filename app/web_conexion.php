<?php

namespace Soft;

use Illuminate\Database\Eloquent\Model;

class web_conexion extends Model
{
    protected $fillable = [
        	'id',   
        	'host',
        	'db',
        	'user',
        	'password',
        	'cronica',
        	'serverpack',
    ];

    public function cronica()
    {
        //una conexion puede tener una cronica
        return $this->belongsTo(Cronica::class);
    }

    public function serverpack()
    {
        //un conexion puede tener un serverpack
        return $this->belongsTo(Serverpack::class);
    }


}
