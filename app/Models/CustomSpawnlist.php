<?php

namespace Soft\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class CustomSpawnlist
 */
class CustomSpawnlist extends Model
{
    protected $table = 'custom_spawnlist';

    public $timestamps = false;

    protected $fillable = [
        'location',
        'count',
        'npc_templateid',
        'locx',
        'locy',
        'locz',
        'randomx',
        'randomy',
        'heading',
        'respawn_delay',
        'loc_id',
        'periodOfDay'
    ];

    protected $guarded = [];

        
}