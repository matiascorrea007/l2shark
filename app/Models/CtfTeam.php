<?php

namespace Soft\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class CtfTeam
 */
class CtfTeam extends Model
{
    protected $table = 'ctf_teams';

    protected $primaryKey = 'teamId';

	public $timestamps = false;

    protected $fillable = [
        'teamName',
        'teamX',
        'teamY',
        'teamZ',
        'teamColor',
        'flagX',
        'flagY',
        'flagZ'
    ];

    protected $guarded = [];

        
}