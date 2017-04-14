<?php

namespace Soft\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class CharacterHenna
 */
class CharacterHenna extends Model
{
    protected $table = 'character_hennas';

    public $timestamps = false;

    protected $fillable = [
        'char_obj_id',
        'symbol_id',
        'slot',
        'class_index'
    ];

    protected $guarded = [];

        
}