<?php

namespace Soft\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class CharacterShortcut
 */
class CharacterShortcut extends Model
{
    protected $table = 'character_shortcuts';

    public $timestamps = false;

    protected $fillable = [
        'char_obj_id',
        'slot',
        'page',
        'type',
        'shortcut_id',
        'level',
        'class_index'
    ];

    protected $guarded = [];

        
}