<?php

namespace Soft\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class FortSiegeGuard
 */
class FortSiegeGuard extends Model
{
    protected $table = 'fort_siege_guards';

    public $timestamps = false;

    protected $fillable = [
        'fortId',
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