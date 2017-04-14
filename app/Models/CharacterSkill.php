<?php

namespace Soft\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class CharacterSkill
 */
class CharacterSkill extends Model
{
    protected $table = 'character_skills';

    public $timestamps = false;

    protected $fillable = [
        'char_obj_id',
        'skill_id',
        'skill_level',
        'skill_name',
        'class_index'
    ];

    protected $guarded = [];

        
}