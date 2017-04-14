<?php

namespace Soft\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class GrandbossDatum
 */
class GrandbossDatum extends Model
{
    protected $table = 'grandboss_data';

    protected $primaryKey = 'boss_id';

	public $timestamps = false;

    protected $fillable = [
        'loc_x',
        'loc_y',
        'loc_z',
        'heading',
        'respawn_time',
        'currentHP',
        'currentMP',
        'status'
    ];

    protected $guarded = [];

        
}