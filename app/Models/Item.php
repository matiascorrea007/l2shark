<?php

namespace Soft\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Item
 */
class Item extends Model
{
    protected $table = 'items';

    protected $primaryKey = 'object_id';

	public $timestamps = false;

    protected $fillable = [
        'owner_id',
        'item_id',
        'count',
        'enchant_level',
        'loc',
        'loc_data',
        'price_sell',
        'price_buy',
        'time_of_use',
        'custom_type1',
        'custom_type2',
        'mana_left'
    ];

    protected $guarded = [];

        
}