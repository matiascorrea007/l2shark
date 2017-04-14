<?php

namespace Soft\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class AutoChatText
 */
class AutoChatText extends Model
{
    protected $table = 'auto_chat_text';

    public $timestamps = false;

    protected $fillable = [
        'groupId',
        'chatText'
    ];

    protected $guarded = [];

        
}