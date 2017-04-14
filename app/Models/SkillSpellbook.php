<?php

namespace Soft\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class SkillSpellbook
 */
class SkillSpellbook extends Model
{
    protected $table = 'skill_spellbooks';

    public $timestamps = false;

    protected $fillable = [
        'skill_id',
        'item_id'
    ];

    protected $guarded = [];

        
}