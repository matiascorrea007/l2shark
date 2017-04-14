<?php

namespace Soft\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class BuffTemplate
 */
class BuffTemplate extends Model
{
    protected $table = 'buff_templates';

    public $timestamps = false;

    protected $fillable = [
        'name',
        'skill_id',
        'skill_name',
        'skill_level',
        'skill_force',
        'skill_order',
        'char_min_level',
        'char_max_level',
        'price_adena'
    ];

    protected $guarded = [];

        
}