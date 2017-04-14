<?php

namespace Soft\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class SevenSignsStatus
 */
class SevenSignsStatus extends Model
{
    protected $table = 'seven_signs_status';

    public $timestamps = false;

    protected $fillable = [
        'current_cycle',
        'festival_cycle',
        'active_period',
        'date',
        'previous_winner',
        'dawn_stone_score',
        'dawn_festival_score',
        'dusk_stone_score',
        'dusk_festival_score',
        'avarice_owner',
        'gnosis_owner',
        'strife_owner',
        'avarice_dawn_score',
        'gnosis_dawn_score',
        'strife_dawn_score',
        'avarice_dusk_score',
        'gnosis_dusk_score',
        'strife_dusk_score',
        'accumulated_bonus0',
        'accumulated_bonus1',
        'accumulated_bonus2',
        'accumulated_bonus3',
        'accumulated_bonus4'
    ];

    protected $guarded = [];

        
}