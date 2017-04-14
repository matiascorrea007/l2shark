<?php

namespace Soft\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class CustomDroplist
 */
class CustomDroplist extends Model
{
    protected $table = 'custom_droplist';

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