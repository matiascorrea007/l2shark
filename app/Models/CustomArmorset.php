<?php

namespace Soft\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class CustomArmorset
 */
class CustomArmorset extends Model
{
    protected $table = 'custom_armorsets';

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