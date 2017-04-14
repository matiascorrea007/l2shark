<?php

namespace Soft\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class CharacterQuest
 */
class CharacterQuest extends Model
{
    protected $table = 'character_quests';

    public $timestamps = false;

    protected $fillable = [
        'char_id',
        'name',
        'var',
        'value',
        'class_index'
    ];

    protected $guarded = [];

        
}