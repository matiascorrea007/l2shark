<?php

namespace Soft\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Minion
 */
class Minion extends Model
{
    protected $table = 'minions';

    public $timestamps = false;

    protected $fillable = [
        'boss_id',
        'minion_id',
        'amount_min',
        'amount_max'
    ];

    protected $guarded = [];

        
}