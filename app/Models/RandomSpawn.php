<?php

namespace Soft\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class RandomSpawn
 */
class RandomSpawn extends Model
{
    protected $table = 'random_spawn';

    protected $primaryKey = 'groupId';

	public $timestamps = false;

    protected $fillable = [
        'npcId',
        'count',
        'initialDelay',
        'respawnDelay',
        'despawnDelay',
        'broadcastSpawn',
        'randomSpawn'
    ];

    protected $guarded = [];

        
}