<?php

namespace Soft\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class CustomNotspawned
 */
class CustomNotspawned extends Model
{
    protected $table = 'custom_notspawned';

    public $timestamps = false;

    protected $fillable = [
        'isCustom'
    ];

    protected $guarded = [];

        
}