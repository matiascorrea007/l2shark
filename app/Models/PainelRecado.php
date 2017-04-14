<?php

namespace Soft\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class PainelRecado
 */
class PainelRecado extends Model
{
    protected $table = 'painel_recados';

    public $timestamps = false;

    protected $fillable = [
        'usuario',
        'recado',
        'data'
    ];

    protected $guarded = [];

        
}