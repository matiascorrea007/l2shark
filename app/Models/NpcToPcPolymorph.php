<?php

namespace Soft\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class NpcToPcPolymorph
 */
class NpcToPcPolymorph extends Model
{
    protected $table = 'npc_to_pc_polymorph';

    public $timestamps = false;

    protected $fillable = [
        'spawn',
        'template',
        'name',
        'title',
        'class_id',
        'female',
        'hair_style',
        'hair_color',
        'face',
        'name_color',
        'title_color',
        'noble',
        'hero',
        'pvp',
        'karma',
        'wpn_enchant',
        'right_hand',
        'left_hand',
        'gloves',
        'chest',
        'legs',
        'feet',
        'hair',
        'hair2',
        'pledge',
        'cw_level',
        'clan_id',
        'ally_id',
        'clan_crest',
        'ally_crest',
        'rnd_class',
        'rnd_appearance',
        'rnd_weapon',
        'rnd_armor',
        'max_rnd_enchant'
    ];

    protected $guarded = [];

        
}