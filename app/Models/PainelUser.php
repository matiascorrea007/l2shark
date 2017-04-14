<?php

namespace Soft\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class PainelUser
 */
class PainelUser extends Model
{
    protected $table = 'painel_users';

    public $timestamps = false;

    protected $fillable = [
        'nome',
        'email',
        'usuario',
        'senha',
        'status',
        'online',
        'cadastrado_em',
        'avatar',
        'ultimo_login',
        'ultimo_login_ip'
    ];

    protected $guarded = [];

        
}