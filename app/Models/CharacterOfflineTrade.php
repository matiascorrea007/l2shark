<?php

namespace Soft\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class CharacterOfflineTrade
 */
class CharacterOfflineTrade extends Model
{
    protected $table = 'character_offline_trade';

    protected $primaryKey = 'charId';

	public $timestamps = false;

    protected $fillable = [
        'time',
        'type',
        'title'
    ];

    protected $guarded = [];

        
}