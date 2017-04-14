<?php

namespace Soft\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Fish
 */
class Fish extends Model
{
    protected $table = 'fish';

    public $timestamps = false;

    protected $fillable = [
        'level',
        'name',
        'hp',
        'hpregen',
        'fish_type',
        'fish_group',
        'fish_guts',
        'guts_check_time',
        'wait_time',
        'combat_time'
    ];

    protected $guarded = [];

        
}