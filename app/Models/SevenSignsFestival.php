<?php

namespace Soft\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class SevenSignsFestival
 */
class SevenSignsFestival extends Model
{
    protected $table = 'seven_signs_festival';

    public $timestamps = false;

    protected $fillable = [
        'festivalId',
        'cabal',
        'cycle',
        'date',
        'score',
        'members'
    ];

    protected $guarded = [];

        
}