<?php

namespace Soft\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Tvt
 */
class Tvt extends Model
{
    protected $table = 'tvt';

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
        'teamsCount',
        'joinTime',
        'eventTime',
        'minPlayers',
        'maxPlayers',
        'delayForNextEvent'
    ];

    protected $guarded = [];

        
}