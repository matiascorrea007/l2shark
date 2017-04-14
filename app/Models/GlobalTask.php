<?php

namespace Soft\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class GlobalTask
 */
class GlobalTask extends Model
{
    protected $table = 'global_tasks';

    public $timestamps = false;

    protected $fillable = [
        'task',
        'type',
        'last_activation',
        'param1',
        'param2',
        'param3'
    ];

    protected $guarded = [];

        
}