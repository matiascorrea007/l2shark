<?php

namespace Soft\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Armorset
 */
class Armorset extends Model
{
    protected $table = 'armorsets';

    public $timestamps = false;

    protected $fillable = [
        'chest',
        'legs',
        'head',
        'gloves',
        'feet',
        'skill_id',
        'shield',
        'shield_skill_id',
        'enchant6skill'
    ];

    protected $guarded = [];

        
}