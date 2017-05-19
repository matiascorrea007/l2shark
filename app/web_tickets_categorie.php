<?php

namespace Soft;

use Illuminate\Database\Eloquent\Model;
use Soft\web_ticket;

class web_tickets_categorie extends Model
{
    protected $fillable = [
    'id',
    'nombre',
    'color',
    ];

public function ticket()
    {
        //un categoria puede tener muchas ticket
       return $this->hasMany(web_ticket::class);
    }


}
