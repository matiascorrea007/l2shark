<?php

namespace Soft\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Box
 */
class Box extends Model
{
    protected $table = 'boxes';

    public $timestamps = false;

    protected $fillable = [
        'spawn',
        'npcid',
        'drawer',
        'itemid',
        'name',
        'count',
        'enchant'
    ];

    protected $guarded = [];

        
}