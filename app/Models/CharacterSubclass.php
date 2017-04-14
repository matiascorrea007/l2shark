<?php

namespace Soft\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class CharacterSubclass
 */
class CharacterSubclass extends Model
{
    protected $table = 'character_subclasses';

    public $timestamps = false;

    protected $fillable = [
        'char_obj_id',
        'class_id',
        'exp',
        'sp',
        'level',
        'class_index'
    ];

    protected $guarded = [];

        
}