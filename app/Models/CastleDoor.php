<?php

namespace Soft\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class CastleDoor
 */
class CastleDoor extends Model
{
    protected $table = 'castle_door';

    public $timestamps = false;

    protected $fillable = [
        'castleId',
        'name',
        'x',
        'y',
        'z',
        'range_xmin',
        'range_ymin',
        'range_zmin',
        'range_xmax',
        'range_ymax',
        'range_zmax',
        'hp',
        'pDef',
        'mDef'
    ];

    protected $guarded = [];

        
}