<?php

namespace Soft\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class VanhalterSpawnlist
 */
class VanhalterSpawnlist extends Model
{
    protected $table = 'vanhalter_spawnlist';

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