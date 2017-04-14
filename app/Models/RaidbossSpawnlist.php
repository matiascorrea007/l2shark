<?php

namespace Soft\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class RaidbossSpawnlist
 */
class RaidbossSpawnlist extends Model
{
    protected $table = 'raidboss_spawnlist';

    public $timestamps = false;

    protected $fillable = [
        'boss_id',
        'amount',
        'loc_x',
        'loc_y',
        'loc_z',
        'heading',
        'respawn_min_delay',
        'respawn_max_delay',
        'respawn_time',
        'currentHp',
        'currentMp'
    ];

    protected $guarded = [];

        
}