<?php

namespace Soft\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class RandomSpawnLoc
 */
class RandomSpawnLoc extends Model
{
    protected $table = 'random_spawn_loc';

    public $timestamps = false;

    protected $fillable = [
        'groupId',
        'x',
        'y',
        'z',
        'heading'
    ];

    protected $guarded = [];

        
}