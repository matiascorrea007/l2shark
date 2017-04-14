<?php

namespace Soft\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Npcskill
 */
class Npcskill extends Model
{
    protected $table = 'npcskills';

    public $timestamps = false;

    protected $fillable = [
        'npcid',
        'skillid',
        'level'
    ];

    protected $guarded = [];

        
}