<?php

namespace Soft\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Fort
 */
class Fort extends Model
{
    protected $table = 'fort';

    public $timestamps = false;

    protected $fillable = [
        'name',
        'siegeDate',
        'siegeDayOfWeek',
        'siegeHourOfDay',
        'owner'
    ];

    protected $guarded = [];

        
}