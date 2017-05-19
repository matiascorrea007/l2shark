<?php

namespace Soft;

use Illuminate\Database\Eloquent\Model;
use Soft\web_ticket;


class web_tickets_prioritie extends Model
{
    protected $fillable = [
    'id',
    'nombre',
    'color',
    ];


   public function ticket()
    {
        //un prioridad puede tener muchas ticket
       return $this->hasMany(web_ticket::class);
    }
}
