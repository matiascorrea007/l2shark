<?php

namespace Soft\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Noticia
 */
class Noticia extends Model
{
    protected $table = 'noticias';

    public $timestamps = false;

    protected $fillable = [
        'tipo',
        'autor',
        'titulo',
        'texto',
        'data'
    ];

    protected $guarded = [];

        
}