<?php

namespace Soft\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ClanSubpledge
 */
class ClanSubpledge extends Model
{
    protected $table = 'clan_subpledges';

    public $timestamps = false;

    protected $fillable = [
        'clan_id',
        'sub_pledge_id',
        'name',
        'leader_name'
    ];

    protected $guarded = [];

        
}