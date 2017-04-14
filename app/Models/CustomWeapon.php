<?php

namespace Soft\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class CustomWeapon
 */
class CustomWeapon extends Model
{
    protected $table = 'custom_weapon';

    protected $primaryKey = 'item_id';

	public $timestamps = false;

    protected $fillable = [
        'name',
        'bodypart',
        'crystallizable',
        'weight',
        'soulshots',
        'spiritshots',
        'crystal_type',
        'p_dam',
        'rnd_dam',
        'weaponType',
        'critical',
        'hit_modify',
        'avoid_modify',
        'shield_def',
        'shield_def_rate',
        'atk_speed',
        'mp_consume',
        'm_dam',
        'duration',
        'price',
        'crystal_count',
        'sellable',
        'dropable',
        'destroyable',
        'tradeable',
        'item_skill_id',
        'item_skill_lvl',
        'enchant4_skill_id',
        'enchant4_skill_lvl',
        'onCast_skill_id',
        'onCast_skill_lvl',
        'onCast_skill_chance',
        'onCrit_skill_id',
        'onCrit_skill_lvl',
        'onCrit_skill_chance'
    ];

    protected $guarded = [];

        
}