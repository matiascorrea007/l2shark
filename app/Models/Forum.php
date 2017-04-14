<?php

namespace Soft\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Forum
 */
class Forum extends Model
{
    protected $table = 'forums';

    protected $primaryKey = 'forum_id';

	public $timestamps = false;

    protected $fillable = [
        'forum_name',
        'forum_parent',
        'forum_post',
        'forum_type',
        'forum_perm',
        'forum_owner_id'
    ];

    protected $guarded = [];

        
}