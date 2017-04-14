<?php

namespace Soft\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Armor
 */
class Armor extends Model
{
    protected $table = 'armor';

    protected $primaryKey = 'item_id';

	public $timestamps = false;

    protected $fillable = [
        'name',
        'bodypart',
        'crystallizable',
        'armor_type',
        'weight',
        'material',
        'crystal_type',
        'avoid_modify',
        'duration',
        'p_def',
        'm_def',
        'mp_bonus',
        'price',
        'crystal_count',
        'sellable',
        'dropable',
        'destroyable',
        'tradeable',
        'item_skill_id',
        'item_skill_lvl'
    ];

    protected $guarded = [];

        
}