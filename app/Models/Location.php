<?php

namespace Soft\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Location
 */
class Location extends Model
{
    protected $table = 'locations';

    public $timestamps = false;

    protected $fillable = [
        'loc_id',
        'loc_x',
        'loc_y',
        'loc_zmin',
        'loc_zmax',
        'proc'
    ];

    protected $guarded = [];

        
}