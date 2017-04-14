<?php

namespace Soft\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Vipinfo
 */
class Vipinfo extends Model
{
    protected $table = 'vipinfo';

    protected $primaryKey = 'teamID';

	public $timestamps = false;

    protected $fillable = [
        'endx',
        'endy',
        'endz',
        'startx',
        'starty',
        'startz'
    ];

    protected $guarded = [];

        
}