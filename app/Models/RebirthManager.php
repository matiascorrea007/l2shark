<?php

namespace Soft\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class RebirthManager
 */
class RebirthManager extends Model
{
    protected $table = 'rebirth_manager';

    protected $primaryKey = 'playerId';

	public $timestamps = false;

    protected $fillable = [
        'rebirthCount'
    ];

    protected $guarded = [];

        
}