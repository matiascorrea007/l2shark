<?php

namespace Soft\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ConfirmarAccount
 */
class ConfirmarAccount extends Model
{
    protected $table = 'confirmar_accounts';

    protected $primaryKey = 'nome_completo';

	public $timestamps = false;

    protected $fillable = [
        'email',
        'login',
        'senha',
        'codigo_seguranca',
        'cfsenha'
    ];

    protected $guarded = [];

        
}