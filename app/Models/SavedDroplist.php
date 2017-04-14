<?php

namespace Soft\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class SavedDroplist
 */
class SavedDroplist extends Model
{
    protected $table = 'saved_droplist';

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