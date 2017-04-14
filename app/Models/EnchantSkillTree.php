<?php

namespace Soft\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class EnchantSkillTree
 */
class EnchantSkillTree extends Model
{
    protected $table = 'enchant_skill_trees';

    public $timestamps = false;

    protected $fillable = [
        'skill_id',
        'level',
        'name',
        'base_lvl',
        'enchant_type',
        'sp',
        'exp',
        'min_skill_lvl',
        'success_rate76',
        'success_rate77',
        'success_rate78'
    ];

    protected $guarded = [];

        
}