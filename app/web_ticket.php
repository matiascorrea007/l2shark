<?php

namespace Soft;

use Illuminate\Database\Eloquent\Model;
use Soft\web_tickets_categorie;
use Soft\User;
use Soft\web_tickets_prioritie;
use Soft\web_tickets_statu;


class web_ticket extends Model
{
    protected $fillable = [
    'id',
    'subject',
    'content',
    'html',
    'status_id',
    'priority_id',
    'user_id',
    'agent_id',
    'category_id',
    ];


public function category()
    {
        //un usuario puede tener muchas ventas
       return $this->belongsTo(Tickets_categorie::class);
    }

public function priority()
    {
        //un usuario puede tener muchas ventas
       return $this->belongsTo(Tickets_prioritie::class);
    }

public function user()
    {
        //un usuario puede tener muchas ventas
       return $this->belongsTo(User::class);
    }

 public function agent()
    {
        //un usuario puede tener muchas ventas
       return $this->belongsTo(User::class);
    }

public function status()
    {
        //un usuario puede tener muchas ventas
       return $this->belongsTo(Tickets_statu::class);
    }
}
