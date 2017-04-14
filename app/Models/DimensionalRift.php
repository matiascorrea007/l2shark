<?php

namespace Soft\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class DimensionalRift
 */
class DimensionalRift extends Model
{
    protected $table = 'dimensional_rift';

    public $timestamps = false;

    protected $fillable = [
        'type',
        'room_id',
        'xMin',
        'xMax',
        'yMin',
        'yMax',
        'zMin',
        'zMax',
        'xT',
        'yT',
        'zT',
        'boss'
    ];

    protected $guarded = [];

        
}