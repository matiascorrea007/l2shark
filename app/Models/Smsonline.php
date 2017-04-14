<?php

namespace Soft\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Smsonline
 */
class Smsonline extends Model
{
    protected $table = 'smsonline';

    public $timestamps = false;

    protected $fillable = [
        'smstimestamp',
        'user_phone',
        'service',
        'char_name'
    ];

    protected $guarded = [];

        
}