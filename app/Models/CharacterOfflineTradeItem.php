<?php

namespace Soft\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class CharacterOfflineTradeItem
 */
class CharacterOfflineTradeItem extends Model
{
    protected $table = 'character_offline_trade_items';

    public $timestamps = false;

    protected $fillable = [
        'charId',
        'item',
        'count',
        'price',
        'enchant'
    ];

    protected $guarded = [];

        
}