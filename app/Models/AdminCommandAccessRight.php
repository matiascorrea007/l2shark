<?php

namespace Soft\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class AdminCommandAccessRight
 */
class AdminCommandAccessRight extends Model
{
    protected $table = 'admin_command_access_rights';

    protected $primaryKey = 'adminCommand';

	public $timestamps = false;

    protected $fillable = [
        'accessLevels'
    ];

    protected $guarded = [];

        
}