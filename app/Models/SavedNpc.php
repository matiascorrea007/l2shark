<?php

namespace Soft\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class SavedNpc
 */
class SavedNpc extends Model
{
    protected $table = 'saved_npc';

    public $timestamps = false;

    protected $fillable = [
        'idTemplate',
        'name',
        'serverSideName',
        'title',
        'serverSideTitle',
        'class',
        'collision_radius',
        'collision_height',
        'level',
        'sex',
        'type',
        'attackrange',
        'hp',
        'mp',
        'hpreg',
        'mpreg',
        'str',
        'con',
        'dex',
        'int',
        'wit',
        'men',
        'exp',
        'sp',
        'patk',
        'pdef',
        'matk',
        'mdef',
        'atkspd',
        'aggro',
        'matkspd',
        'rhand',
        'lhand',
        'armor',
        'walkspd',
        'runspd',
        'faction_id',
        'faction_range',
        'isUndead',
        'absorb_level',
        'absorb_type'
    ];

    protected $guarded = [];

        
}