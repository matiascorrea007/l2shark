<?php

namespace Soft\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ClanNotice
 */
class ClanNotice extends Model
{
    protected $table = 'clan_notices';

    protected $primaryKey = 'clan_id';

	public $timestamps = false;

    protected $fillable = [
        'notice',
        'enabled'
    ];

    protected $guarded = [];

        
}