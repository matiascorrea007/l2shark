<?php

namespace Soft\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class L2vote
 */
class L2vote extends Model
{
    protected $table = 'l2votes';

    public $timestamps = false;

    protected $fillable = [
        'votedate',
        'charName'
    ];

    protected $guarded = [];

        
}