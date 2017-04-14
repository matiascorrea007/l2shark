<?php

namespace Soft\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ClanWar
 */
class ClanWar extends Model
{
    protected $table = 'clan_wars';

    public $timestamps = false;

    protected $fillable = [
        'clan1',
        'clan2',
        'wantspeace1',
        'wantspeace2'
    ];

    protected $guarded = [];

        
}