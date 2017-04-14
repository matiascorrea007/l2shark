<?php

namespace Soft\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Topic
 */
class Topic extends Model
{
    protected $table = 'topic';

    public $timestamps = false;

    protected $fillable = [
        'topic_id',
        'topic_forum_id',
        'topic_name',
        'topic_date',
        'topic_ownername',
        'topic_ownerid',
        'topic_type',
        'topic_reply'
    ];

    protected $guarded = [];

        
}