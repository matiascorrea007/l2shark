<?php

namespace Soft\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class CastleManorProcure
 */
class CastleManorProcure extends Model
{
    protected $table = 'castle_manor_procure';

    public $timestamps = false;

    protected $fillable = [
        'castle_id',
        'crop_id',
        'can_buy',
        'start_buy',
        'price',
        'reward_type',
        'period'
    ];

    protected $guarded = [];

        
}