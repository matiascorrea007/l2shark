<?php

namespace Soft\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Account
 */
class Account extends Model
{
    protected $table = 'accounts';

    protected $primaryKey = 'login';

	public $timestamps = false;

    protected $fillable = [
        'password',
        'lastactive',
        'access_level',
        'lastIP',
        'lastServer',
        'email',
        'nombre',
        'pregunta',
        'respuesta',
        'accessLevel',
        'nome_completo',
        'repasword',
        'anotacao'
    ];

    protected $guarded = [];

        
}