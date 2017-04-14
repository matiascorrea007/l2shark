<?php

namespace Soft\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ZoneVertex
 */
class ZoneVertex extends Model
{
    protected $table = 'zone_vertices';

    public $timestamps = false;

    protected $fillable = [
        'order',
        'x',
        'y'
    ];

    protected $guarded = [];

        
}