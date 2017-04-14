<?php

namespace Soft\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ClanPriv
 */
class ClanPriv extends Model
{
    protected $table = 'clan_privs';

    public $timestamps = false;

    protected $fillable = [
        'clan_id',
        'rank',
        'party',
        'privs'
    ];

    protected $guarded = [];

        
}