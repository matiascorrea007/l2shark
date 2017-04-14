<?php

namespace Soft\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class CharacterSkillsSave
 */
class CharacterSkillsSave extends Model
{
    protected $table = 'character_skills_save';

    public $timestamps = false;

    protected $fillable = [
        'char_obj_id',
        'skill_id',
        'skill_level',
        'effect_count',
        'effect_cur_time',
        'reuse_delay',
        'systime',
        'restore_type',
        'class_index',
        'buff_index'
    ];

    protected $guarded = [];

        
}