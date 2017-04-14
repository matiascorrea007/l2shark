<?php

namespace Soft\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class CursedWeapon
 */
class CursedWeapon extends Model
{
    protected $table = 'cursed_weapons';

    protected $primaryKey = 'itemId';

	public $timestamps = false;

    protected $fillable = [
        'playerId',
        'playerKarma',
        'playerPkKills',
        'nbKills',
        'endTime'
    ];

    protected $guarded = [];

        
}