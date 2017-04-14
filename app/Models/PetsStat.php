<?php

namespace Soft\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class PetsStat
 */
class PetsStat extends Model
{
    protected $table = 'pets_stats';

    public $timestamps = false;

    protected $fillable = [
        'type',
        'typeID',
        'level',
        'expMax',
        'hpMax',
        'mpMax',
        'patk',
        'pdef',
        'matk',
        'mdef',
        'acc',
        'evasion',
        'crit',
        'speed',
        'atk_speed',
        'cast_speed',
        'feedMax',
        'feedbattle',
        'feednormal',
        'loadMax',
        'hpregen',
        'mpregen',
        'owner_exp_taken'
    ];

    protected $guarded = [];

        
}