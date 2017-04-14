<?php

namespace Soft\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TicketsResposta
 */
class TicketsResposta extends Model
{
    protected $table = 'tickets_respostas';

    public $timestamps = false;

    protected $fillable = [
        'ticket_id',
        'mensagem',
        'dia',
        'hora',
        'accesslevel',
        'autor'
    ];

    protected $guarded = [];

        
}