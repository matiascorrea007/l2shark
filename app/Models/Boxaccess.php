<?php

namespace Soft\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Boxaccess
 */
class Boxaccess extends Model
{
    protected $table = 'boxaccess';

    public $timestamps = false;

    protected $fillable = [
        'spawn',
        'charname'
    ];

    protected $guarded = [];

        
}