<?php

namespace Soft\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Pkkill
 */
class Pkkill extends Model
{
    protected $table = 'pkkills';

    public $timestamps = false;

    protected $fillable = [
        'killerId',
        'killedId',
        'kills'
    ];

    protected $guarded = [];

        
}