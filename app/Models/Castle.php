<?php

namespace Soft\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Castle
 */
class Castle extends Model
{
    protected $table = 'castle';

    protected $primaryKey = 'name';

	public $timestamps = false;

    protected $fillable = [
        'taxPercent',
        'treasury',
        'siegeDate',
        'siegeDayOfWeek',
        'siegeHourOfDay',
        'showNpcCrest'
    ];

    protected $guarded = [];

        
}