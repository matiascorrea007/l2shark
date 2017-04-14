<?php

namespace Soft\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Denuncia
 */
class Denuncia extends Model
{
    protected $table = 'denuncias';

    public $timestamps = false;

    protected $fillable = [
        'autor',
        'denunciado',
        'data',
        'motivo',
        'prints'
    ];

    protected $guarded = [];

        
}