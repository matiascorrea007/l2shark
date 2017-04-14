<?php

namespace Soft\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class SiegeClan
 */
class SiegeClan extends Model
{
    protected $table = 'siege_clans';

    public $timestamps = false;

    protected $fillable = [
        'castle_id',
        'clan_id',
        'type',
        'castle_owner'
    ];

    protected $guarded = [];

        
}