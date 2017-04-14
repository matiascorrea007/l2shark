<?php

namespace Soft\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ClanhallSiege
 */
class ClanhallSiege extends Model
{
    protected $table = 'clanhall_siege';

    public $timestamps = false;

    protected $fillable = [
        'name',
        'siege_data'
    ];

    protected $guarded = [];

        
}