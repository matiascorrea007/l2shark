<?php

namespace Soft\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class EventStat
 */
class EventStat extends Model
{
    protected $table = 'event_stats';

    public $timestamps = false;

    protected $fillable = [
        'player',
        'event',
        'num',
        'wins',
        'losses',
        'kills',
        'deaths',
        'scores'
    ];

    protected $guarded = [];

        
}