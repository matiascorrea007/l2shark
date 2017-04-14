<?php

namespace Soft\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class SkillTree
 */
class SkillTree extends Model
{
    protected $table = 'skill_trees';

    public $timestamps = false;

    protected $fillable = [
        'class_id',
        'skill_id',
        'level',
        'name',
        'sp',
        'min_level'
    ];

    protected $guarded = [];

        
}