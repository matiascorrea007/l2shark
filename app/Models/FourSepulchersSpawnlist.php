<?php

namespace Soft\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class FourSepulchersSpawnlist
 */
class FourSepulchersSpawnlist extends Model
{
    protected $table = 'four_sepulchers_spawnlist';

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
        'key_npc_id',
        'spawntype'
    ];

    protected $guarded = [];

        
}