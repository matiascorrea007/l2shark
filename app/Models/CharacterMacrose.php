<?php

namespace Soft\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class CharacterMacrose
 */
class CharacterMacrose extends Model
{
    protected $table = 'character_macroses';

    public $timestamps = false;

    protected $fillable = [
        'char_obj_id',
        'icon',
        'name',
        'descr',
        'acronym',
        'commands'
    ];

    protected $guarded = [];

        
}