<?php

namespace Soft\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class EventBuff
 */
class EventBuff extends Model
{
    protected $table = 'event_buffs';

    protected $primaryKey = 'player';

	public $timestamps = false;

    protected $fillable = [
        'buffs'
    ];

    protected $guarded = [];

        
}