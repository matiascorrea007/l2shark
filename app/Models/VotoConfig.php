<?php

namespace Soft\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class VotoConfig
 */
class VotoConfig extends Model
{
    protected $table = 'voto_config';

    public $timestamps = false;

    protected $fillable = [
        'valor'
    ];

    protected $guarded = [];

        
}