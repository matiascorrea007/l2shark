<?php

namespace Soft\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Gameserver
 */
class Gameserver extends Model
{
    protected $table = 'gameservers';

    protected $primaryKey = 'server_id';

	public $timestamps = false;

    protected $fillable = [
        'hexid',
        'host'
    ];

    protected $guarded = [];

        
}