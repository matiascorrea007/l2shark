<?php

namespace Soft\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ClanSkill
 */
class ClanSkill extends Model
{
    protected $table = 'clan_skills';

    public $timestamps = false;

    protected $fillable = [
        'clan_id',
        'skill_id',
        'skill_level',
        'skill_name'
    ];

    protected $guarded = [];

        
}