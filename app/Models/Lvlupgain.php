<?php

namespace Soft\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Lvlupgain
 */
class Lvlupgain extends Model
{
    protected $table = 'lvlupgain';

    protected $primaryKey = 'classid';

	public $timestamps = false;

    protected $fillable = [
        'defaulthpbase',
        'defaulthpadd',
        'defaulthpmod',
        'defaultcpbase',
        'defaultcpadd',
        'defaultcpmod',
        'defaultmpbase',
        'defaultmpadd',
        'defaultmpmod',
        'class_lvl'
    ];

    protected $guarded = [];

        
}