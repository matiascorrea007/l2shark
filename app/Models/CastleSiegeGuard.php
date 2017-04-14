<?php

namespace Soft\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class CastleSiegeGuard
 */
class CastleSiegeGuard extends Model
{
    protected $table = 'castle_siege_guards';

    public $timestamps = false;

    protected $fillable = [
        'castleId',
        'npcId',
        'x',
        'y',
        'z',
        'heading',
        'respawnDelay',
        'isHired'
    ];

    protected $guarded = [];

        
}