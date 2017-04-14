<?php

namespace Soft\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class CharacterRaidPoint
 */
class CharacterRaidPoint extends Model
{
    protected $table = 'character_raid_points';

    public $timestamps = false;

    protected $fillable = [
        'charId',
        'boss_id',
        'points'
    ];

    protected $guarded = [];

        
}