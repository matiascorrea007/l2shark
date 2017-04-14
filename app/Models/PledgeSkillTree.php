<?php

namespace Soft\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class PledgeSkillTree
 */
class PledgeSkillTree extends Model
{
    protected $table = 'pledge_skill_trees';

    public $timestamps = false;

    protected $fillable = [
        'skill_id',
        'level',
        'name',
        'clan_lvl',
        'Description',
        'repCost',
        'itemId'
    ];

    protected $guarded = [];

        
}