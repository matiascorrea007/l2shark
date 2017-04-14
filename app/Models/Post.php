<?php

namespace Soft\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Post
 */
class Post extends Model
{
    protected $table = 'posts';

    public $timestamps = false;

    protected $fillable = [
        'post_id',
        'post_owner_name',
        'post_ownerid',
        'post_date',
        'post_topic_id',
        'post_forum_id',
        'post_txt'
    ];

    protected $guarded = [];

        
}