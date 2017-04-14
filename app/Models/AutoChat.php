<?php

namespace Soft\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class AutoChat
 */
class AutoChat extends Model
{
    protected $table = 'auto_chat';

    protected $primaryKey = 'groupId';

	public $timestamps = false;

    protected $fillable = [
        'npcId',
        'chatDelay'
    ];

    protected $guarded = [];

        
}