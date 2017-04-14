<?php

namespace Soft\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Dm
 */
class Dm extends Model
{
    protected $table = 'dm';

    public $timestamps = false;

    protected $fillable = [
        'eventName',
        'eventDesc',
        'joiningLocation',
        'minlvl',
        'maxlvl',
        'npcId',
        'npcX',
        'npcY',
        'npcZ',
        'npcHeading',
        'rewardId',
        'rewardAmount',
        'joinTime',
        'eventTime',
        'minPlayers',
        'maxPlayers',
        'color',
        'playerX',
        'playerY',
        'playerZ',
        'delayForNextEvent'
    ];

    protected $guarded = [];

        
}