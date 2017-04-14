<?php

namespace Soft\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class EventStatsFull
 */
class EventStatsFull extends Model
{
    protected $table = 'event_stats_full';

    public $timestamps = false;

    protected $fillable = [
        'player',
        'num',
        'winpercent',
        'kdratio',
        'wins',
        'losses',
        'kills',
        'deaths',
        'favevent'
    ];

    protected $guarded = [];

        
}