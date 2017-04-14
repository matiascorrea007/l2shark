<?php

namespace Soft\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class PainelNoticia
 */
class PainelNoticia extends Model
{
    protected $table = 'painel_noticias';

    public $timestamps = false;

    protected $fillable = [
        'titulo',
        'autor',
        'noticia',
        'hora'
    ];

    protected $guarded = [];

        
}