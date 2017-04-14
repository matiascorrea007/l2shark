<?php

namespace Soft\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ClanhallFunction
 */
class ClanhallFunction extends Model
{
    protected $table = 'clanhall_functions';

    public $timestamps = false;

    protected $fillable = [
        'hall_id',
        'type',
        'lvl',
        'lease',
        'rate',
        'endTime'
    ];

    protected $guarded = [];

        
}