<?php

namespace Soft\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class HennaTree
 */
class HennaTree extends Model
{
    protected $table = 'henna_trees';

    public $timestamps = false;

    protected $fillable = [
        'class_id',
        'symbol_id'
    ];

    protected $guarded = [];

        
}