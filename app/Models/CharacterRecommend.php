<?php

namespace Soft\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class CharacterRecommend
 */
class CharacterRecommend extends Model
{
    protected $table = 'character_recommends';

    public $timestamps = false;

    protected $fillable = [
        'char_id',
        'target_id'
    ];

    protected $guarded = [];

        
}