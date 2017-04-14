<?php

namespace Soft\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TvtTeam
 */
class TvtTeam extends Model
{
    protected $table = 'tvt_teams';

    protected $primaryKey = 'teamId';

	public $timestamps = false;

    protected $fillable = [
        'teamName',
        'teamX',
        'teamY',
        'teamZ',
        'teamColor'
    ];

    protected $guarded = [];

        
}