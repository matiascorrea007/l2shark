<?php

namespace Soft\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Itemsonground
 */
class Itemsonground extends Model
{
    protected $table = 'itemsonground';

    protected $primaryKey = 'object_id';

	public $timestamps = false;

    protected $fillable = [
        'item_id',
        'count',
        'enchant_level',
        'x',
        'y',
        'z',
        'drop_time',
        'equipable'
    ];

    protected $guarded = [];

        
}