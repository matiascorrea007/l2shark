<?php

namespace Soft\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class GrandbossList
 */
class GrandbossList extends Model
{
    protected $table = 'grandboss_list';

    protected $primaryKey = 'player_id';

	public $timestamps = false;

    protected $fillable = [
        'zone'
    ];

    protected $guarded = [];

        
}