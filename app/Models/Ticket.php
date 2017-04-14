<?php

namespace Soft\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Ticket
 */
class Ticket extends Model
{
    protected $table = 'tickets';

    public $timestamps = false;

    protected $fillable = [
        'autor',
        'status',
        'dia',
        'hora',
        'assunto',
        'mensagem'
    ];

    protected $guarded = [];

        
}