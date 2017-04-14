<?php

namespace Soft\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ModsBufferSkill
 */
class ModsBufferSkill extends Model
{
    protected $table = 'mods_buffer_skills';

    public $timestamps = false;

    protected $fillable = [
        'level',
        'skill_group',
        'adena'
    ];

    protected $guarded = [];

        
}