<?php

namespace Soft\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Droplist
 */
class Droplist extends Model
{
    protected $table = 'droplist';

    public $timestamps = false;

    protected $fillable = [
        'mobId',
        'itemId',
        'min',
        'max',
        'category',
        'chance'
    ];

    protected $guarded = [];

        
}