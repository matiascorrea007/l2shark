<?php

namespace Soft\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ClanDatum
 */
class ClanDatum extends Model
{
    protected $table = 'clan_data';

    protected $primaryKey = 'clan_id';

	public $timestamps = true;

    protected $fillable = [
        'clan_name',
        'clan_level',
        'reputation_score',
        'hasCastle',
        'ally_id',
        'ally_name',
        'leader_id',
        'crest_id',
        'crest_large_id',
        'ally_crest_id',
        'auction_bid_at',
        'ally_penalty_expiry_time',
        'ally_penalty_type',
        'char_penalty_expiry_time',
        'dissolving_expiry_time'
    ];

    protected $guarded = [];

        
}