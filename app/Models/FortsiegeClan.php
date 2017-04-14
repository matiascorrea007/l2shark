<?php

namespace Soft\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class FortsiegeClan
 */
class FortsiegeClan extends Model
{
    protected $table = 'fortsiege_clans';

    public $timestamps = false;

    protected $fillable = [
        'fort_id',
        'clan_id',
        'type',
        'fort_owner'
    ];

    protected $guarded = [];

        
}