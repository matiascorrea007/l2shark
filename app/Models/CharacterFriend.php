<?php

namespace Soft\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class CharacterFriend
 */
class CharacterFriend extends Model
{
    protected $table = 'character_friends';

    public $timestamps = false;

    protected $fillable = [
        'char_id',
        'friend_id',
        'friend_name',
        'not_blocked'
    ];

    protected $guarded = [];

        
}