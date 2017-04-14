<?php

namespace Soft\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Loginvoto
 */
class Loginvoto extends Model
{
    protected $table = 'loginvotos';

    public $timestamps = false;

    protected $fillable = [
        'login',
        'datadovoto'
    ];

    protected $guarded = [];

        
}