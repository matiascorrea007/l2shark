<?php

namespace Soft\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class FishingSkillTree
 */
class FishingSkillTree extends Model
{
    protected $table = 'fishing_skill_trees';

    public $timestamps = false;

    protected $fillable = [
        'skill_id',
        'level',
        'name',
        'sp',
        'min_level',
        'costid',
        'cost',
        'isfordwarf'
    ];

    protected $guarded = [];

        
}