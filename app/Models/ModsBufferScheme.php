<?php

namespace Soft\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ModsBufferScheme
 */
class ModsBufferScheme extends Model
{
    protected $table = 'mods_buffer_schemes';

    public $timestamps = false;

    protected $fillable = [
        'ownerId',
        'level',
        'scheme'
    ];

    protected $guarded = [];

        
}