<?php

namespace Soft\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class SkillLearn
 */
class SkillLearn extends Model
{
    protected $table = 'skill_learn';

    public $timestamps = false;

    protected $fillable = [
        'npc_id',
        'class_id'
    ];

    protected $guarded = [];

        
}