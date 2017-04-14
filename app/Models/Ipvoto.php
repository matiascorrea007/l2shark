<?php

namespace Soft\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Ipvoto
 */
class Ipvoto extends Model
{
    protected $table = 'ipvotos';

    public $timestamps = false;

    protected $fillable = [
        'ip',
        'datadovoto'
    ];

    protected $guarded = [];

        
}