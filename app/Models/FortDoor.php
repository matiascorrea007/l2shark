<?php

namespace Soft\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class FortDoor
 */
class FortDoor extends Model
{
    protected $table = 'fort_door';

    public $timestamps = false;

    protected $fillable = [
        'fortId',
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