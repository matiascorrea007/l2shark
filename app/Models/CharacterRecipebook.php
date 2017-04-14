<?php

namespace Soft\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class CharacterRecipebook
 */
class CharacterRecipebook extends Model
{
    protected $table = 'character_recipebook';

    public $timestamps = false;

    protected $fillable = [
        'char_id',
        'type'
    ];

    protected $guarded = [];

        
}