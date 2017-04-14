<?php

namespace Soft\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Totalvoto
 */
class Totalvoto extends Model
{
    protected $table = 'totalvoto';

    public $timestamps = false;

    protected $fillable = [
        'votos'
    ];

    protected $guarded = [];

        
}