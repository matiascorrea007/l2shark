<?php

namespace Soft\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class User
 */
class User extends Model
{
    protected $table = 'users';

    protected $primaryKey = 'ID';

	public $timestamps = false;

    protected $fillable = [
        'name',
        'senha',
        'acesso'
    ];

    protected $guarded = [];

        
}